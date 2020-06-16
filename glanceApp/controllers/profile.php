<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {
	
	public function index($username){
		if($username==''){
			redirect(base_url().'user/login');
			exit;
		}

		$data['show_friend_button'] = true;
		$profile_row = $this->member_model->get_member_by_username($username);

		/*if($this->session->userdata('username')!=$profile_row->username && $this->session->userdata('is_user_login')){
			$is_friend_row = $this->profile_model->is_already_friend($this->session->userdata('user_id'), $profile_row->ID);
			if($is_friend_row)
				$data['show_friend_button'] = false;
		}*/
		
		//$other_profiles = $this->profile_model->get_other_profiles();
		//$friends_profile = $this->profile_model->get_friends_profile($profile_row->ID);
		//$notes_row = $this->note_model->get_all_notes_by_userid($profile_row->ID,3);
		//$diary_result = $this->diary_model->get_all_diary_by_userid($profile_row->ID);
		
		
		if($profile_row){
			$comment_row = $this->comments_model->get_all_comments($profile_row->id);
			$is_already_friend = $this->friend_model->friendship_validations($profile_row->id);
			$is_already_favourite = $this->friend_model->friendship_favourite($profile_row->id);
			$profile_views = $this->profile_views($profile_row->id);
			
			$data['title'] = SITE_NAME.': '.$profile_row->name;
			$data['msg'] = '';
			$data['is_already_friend'] = $is_already_friend;
			$data['is_already_favourite'] = $is_already_favourite;
			$data['profile_views'] = $profile_views;
			$data['row'] = $profile_row;
			$data['comment_row'] = $comment_row;
			if(($this->session->userdata('username')!=$username)) {
				
				$privacy_row = $this->member_model->get_member_privacy_by_mem_id($profile_row->id);
				if($this->session->userdata('username')) {
					$isFriend = $this->friend_model->isfriends($this->session->userdata('member_id'),$profile_row->id);
				} else {
					$isFriend = FALSE;
				}
				/// Email Settings
				if(@$privacy_row->email_setting == 'friends') {
					if($isFriend) {
						$showEmail = true;
					} else {
						$showEmail = false;
					}
				} else if(@$privacy_row->email_setting == 'me') {
					$showEmail = false;
				} else {
					$showEmail = true;
				}
				
				/// Phone Settings
				if(@$privacy_row->phone_setting == 'friends') {
					if($isFriend) {
						$showPhone = true;
					} else {
						$showPhone = false;
					}
				} else if(@$privacy_row->phone_setting == 'me') {
					$showPhone = false;
				} else {
					$showPhone = true;
				}
				
				/// DOB Settings
				if(@$privacy_row->dob_setting == 'friends') {
					if($isFriend) {
						$showDOB = true;
					} else {
						$showDOB = false;
					}
				} else if(@$privacy_row->dob_setting == 'me') {
					$showDOB = false;
				} else {
					$showDOB = true;
				}
				
				/// Location Settings
				if(@$privacy_row->location_setting == 'friends') {
					if($isFriend) {
						$showLocation = true;
					} else {
						$showLocation = false;
					}
				} else if(@$privacy_row->location_setting == 'me') {
					$showLocation = false;
				} else {
					$showLocation = true;
				}
				
				/// Message Settings
				if(@$privacy_row->msg_setting == 'friends') {
					if($isFriend) {
						$showMessage = true;
					} else {
						$showMessage = false;
					}
				} else {
					$showMessage = true;
				}
				
				/// Comment Settings
				if(@$privacy_row->comment_setting == 'friends') {
					if($isFriend) {
						$showComment = true;
					} else {
						$showComment = false;
					}
				} else {
					$showComment = true;
				}
				
				/// Gallery Settings
				if(@$privacy_row->gallery_setting == 'friends') {
					if($isFriend) {
						$showGallery = true;
					} else {
						$showGallery = false;
					}
				} else if(@$privacy_row->gallery_setting == 'me') {
					$showGallery = false;
				} else {
					$showGallery = true;
				}
				
				//$data['privacy_row'] = $privacy_row;
				$data['email_setting'] = $showEmail;
				$data['phone_setting'] = $showPhone;
				$data['dob_setting'] = $showDOB;
				$data['location_setting'] = $showLocation;
				$data['msg_setting'] = $showMessage;
				$data['comment_setting'] = $showComment;
				$data['gallery_setting'] = $showGallery;
				
				$this->load->view('common/before_head_close');
				$this->load->view('common/header');
				$this->load->view('profile_others_view', $data);
				$this->load->view('common/footer');
				$this->load->view('common/before_body_close');
				
			} else {
				$this->load->view('common/before_head_close');
				$this->load->view('common/header');
				$this->load->view('profile_view', $data);
				$this->load->view('common/footer');
				$this->load->view('common/before_body_close');
			}
		} else {
			redirect(base_url().'profile/'.$this->session->userdata('username'));
			exit;
		}
		
	}
	
	public function add_comments() {
		
		$username = $this->input->post('to');
		$comment = $this->input->post('comment');
		$memid_From = $this->member_model->get_member_id_by_username($this->session->userdata('username'));
		$memid_To = $this->member_model->get_member_id_by_username($username);
		
		$comment = strip_tags(urldecode($comment));
		
		$comment_array = array(
								'mem_id_from' => $memid_From->id,
								'mem_id_to' => $memid_To->id,
								'date_comment' => date("Y-m-d"),
								'comments' => $comment,
								);
								
		$return = $this->comments_model->add_comment($comment_array);
		return $return;
	}
	
	
	
	public function profile_views($member_id){
		$return=0;
		if($member_id){
			$is_ip_already_viewed_profile = $this->profile_views_model->is_ip_already_viewed_profile($member_id);	
			
			if($is_ip_already_viewed_profile){
					$return = $this->profile_views_model->count_profile_views($member_id);	
			}
			else {
				$data = array(
				'member_id' => $member_id,
				'ip_address' => $this->input->ip_address(),
				'dated' => date('Y-m-d H:i:s'),
				);
				$this->profile_views_model->add_profile_viewer($data);
				$return = $this->profile_views_model->count_profile_views($member_id);	
			}
		}
		return $return;
	}
		
}
