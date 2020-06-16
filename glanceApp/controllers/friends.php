<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Friends extends CI_Controller {
	
	public function index(){
		$friends_row = $this->friend_model->get_all_approved_friends($this->session->userdata('member_id'));
		$data['title'] = SITE_NAME.': Friends';
		$data['msg'] = '';
		$data['record_set'] = $friends_row;
		$this->load->view('common/before_head_close');
		$this->load->view('common/header');
		$this->load->view('friends_view', $data);
		$this->load->view('common/footer');
		$this->load->view('common/before_body_close_request');
	}
	
	public function request_sent(){
		$request_sent_row = $this->friend_model->get_request_sent_friends_by_status($this->session->userdata('member_id'),'pending');

		$data['title'] = SITE_NAME.': Friends Requests Sent';
		$data['msg'] = '';
		$data['record_set'] = $request_sent_row;
		$this->load->view('common/before_head_close');
		$this->load->view('common/header');
		$this->load->view('request_sent_view', $data);
		$this->load->view('common/footer');
		$this->load->view('common/before_body_close_request');
	}
	
	public function request_received(){
		$request_received_row = $this->friend_model->get_request_received_friends_by_status($this->session->userdata('member_id'),'pending');
		$data['title'] = SITE_NAME.': Friends Requests Received';
		$data['msg'] = '';
		$data['record_set'] = $request_received_row;
		$this->load->view('common/before_head_close');
		$this->load->view('common/header');
		$this->load->view('request_received_view', $data);
		$this->load->view('common/footer');
		$this->load->view('common/before_body_close_request');
	}
	
	public function favourite_friends(){
		
		$request_favourite_row = $this->friend_model->get_favourite_friends($this->session->userdata('member_id'));

		$data['title'] = SITE_NAME.': Favourite Friends List';
		$data['msg'] = '';
		$data['record_set'] = $request_favourite_row;
		$this->load->view('common/before_head_close');
		$this->load->view('common/header');
		$this->load->view('favourite_friends_view', $data);
		$this->load->view('common/footer');
		$this->load->view('common/before_body_close');
	}
	
	public function blocked_friends(){
		
		$request_blocked_row = $this->friend_model->get_friends_by_status($this->session->userdata('member_id'),'blocked');

		$data['title'] = SITE_NAME.': Blocked Friends List';
		$data['msg'] = '';
		$data['record_set'] = $request_blocked_row;
		$this->load->view('common/before_head_close');
		$this->load->view('common/header');
		$this->load->view('blocked_friends_view', $data);
		$this->load->view('common/footer');
		$this->load->view('common/before_body_close');
	}
	
	public function send_friend_request($id){
		
		$id = my_decrypt($id);
		
		if(!$this->session->userdata('member_id')){
			redirect(base_url().'user/login');
			exit;	
		}

		if(!$id){
			redirect(base_url().'profile/'.$this->session->userdata('username'));
			exit;	
		}
		
		if($id==$this->session->userdata('member_id')){
			redirect(base_url().'profile/'.$this->session->userdata('username'));
			exit;	
		}
		
		$is_already_friend = $this->friend_model->friendship_validations($id);
		if($is_already_friend){
			redirect(base_url().'friends/request_sent');
			exit;
		}
		$data['title'] = SITE_NAME.': Add Friend';
		$data['msg'] = '';
		$data['row'] = '';
		
		$friend_data = array(
				'member_id' => $this->session->userdata('member_id'),
				'friend_id' => $id,
				'dated' => date("Y-m-d H:i:s")
		);

		$this->friend_model->add_friend($friend_data);
		redirect(base_url().'friends/request_sent');
	}
	
	public function accept_friend_request($id){
		
		$id = my_decrypt($id);
		
		if(!$this->session->userdata('member_id')){
			redirect(base_url().'user/login');
			exit;	
		}

		if(!$id){
			redirect(base_url().'profile/'.$this->session->userdata('username'));
			exit;	
		}
		
		if($id==$this->session->userdata('member_id')){
			redirect(base_url().'profile/'.$this->session->userdata('username'));
			exit;	
		}
						
		$data = array(
				'status' => 'approved'
		);
		$this->friend_model->edit_friend($id,$data);
		
		//Adding it into this user circle as well.
		$friend_data = array(
				'member_id' => $this->session->userdata('member_id'),
				'friend_id' => $id,
				'status' => 'approved',
				'dated' => date("Y-m-d H:i:s")
		);

		$this->friend_model->add_friend($friend_data);
		
		redirect(base_url().'friends');
	}
	
	public function reject_friend_request($id){
		
		$id = my_decrypt($id);
		
		echo $id;
		if(!$this->session->userdata('member_id')){
			redirect(base_url().'user/login');
			exit;	
		}

		if(!$id){
			redirect(base_url().'profile/'.$this->session->userdata('username'));
			exit;	
		}
		
		if($id==$this->session->userdata('member_id')){
			redirect(base_url().'profile/'.$this->session->userdata('username'));
			exit;	
		}
						
		$data = array(
				'status' => 'discard'
		);
		$this->friend_model->edit_friend($id,$data);

		redirect(base_url().'friends/request_received');
	}
	
	public function add_to_favourite($id){
		
		$id = my_decrypt($id);
		
		if(!$this->session->userdata('member_id')){
			redirect(base_url().'user/login');
			exit;	
		}

		if(!$id){
			redirect(base_url().'profile/'.$this->session->userdata('username'));
			exit;	
		}
		
		if($id==$this->session->userdata('member_id')){
			redirect(base_url().'profile/'.$this->session->userdata('username'));
			exit;	
		}
						
		$data = array(
				'is_favourite' => 'yes'
		);
		$this->friend_model->edit_friend_statuses($id,$data);

		redirect(base_url().'friends/favourite_friends');
		// echo ("<script>history.go(-1);</script>");
	}	
	
	public function unfavourite($id){
		
		$id = my_decrypt($id);
		
		if(!$this->session->userdata('member_id')){
			redirect(base_url().'user/login');
			exit;	
		}

		if(!$id){
			redirect(base_url().'profile/'.$this->session->userdata('username'));
			exit;	
		}
		
		if($id==$this->session->userdata('member_id')){
			redirect(base_url().'profile/'.$this->session->userdata('username'));
			exit;	
		}
						
		$data = array(
				'is_favourite' => 'no'
		);
		$this->friend_model->edit_friend_statuses($id,$data);

		redirect(base_url().'friends/favourite_friends');
	}
	
	public function block_friend($id){
		
		$id = my_decrypt($id);
		
		if(!$this->session->userdata('member_id')){
			redirect(base_url().'user/login');
			exit;	
		}

		if(!$id){
			redirect(base_url().'profile/'.$this->session->userdata('username'));
			exit;	
		}
		
		if($id==$this->session->userdata('member_id')){
			redirect(base_url().'profile/'.$this->session->userdata('username'));
			exit;	
		}
						
		// $data = array(
		// 		'status' => 'blocked'
		// );
		// $this->friend_model->edit_friend_statuses($id,$data);

		$is_already_friend = $this->friend_model->friendship_validations($id);
		if(!$is_already_friend){
			$friend_data = array(
				'member_id' => $this->session->userdata('member_id'),
				'friend_id' => $id,
				'dated' => date("Y-m-d H:i:s"),
				'status' => 'blocked'
			);

			$this->friend_model->add_friend($friend_data);
			
		} else {
			$data = array(
					'status' => 'blocked'
			);
			$this->friend_model->edit_friend_statuses($id,$data);

		}

		redirect(base_url().'friends/blocked_friends');
		
	}
	
	public function unblock_friend($id){
		
		$id = my_decrypt($id);
		
		$rs = $this->friend_model->delete_block($id);

		redirect(base_url().'friends/blocked_friends');

		// if(!$this->session->userdata('member_id')){
		// 	redirect(base_url().'user/login');
		// 	exit;	
		// }

		// if(!$id){
		// 	redirect(base_url().'profile/'.$this->session->userdata('username'));
		// 	exit;	
		// }
		
		// if($id==$this->session->userdata('member_id')){
		// 	redirect(base_url().'profile/'.$this->session->userdata('username'));
		// 	exit;	
		// }
						
		// $data = array(
		// 		'status' => 'approved'
		// );
		// $this->friend_model->edit_friend_statuses($id,$data);

		// redirect(base_url().'friends');
	}
	
	
}
