<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edit_Profile extends CI_Controller {
	
	public function index()
	{
		if($this->session->userdata('username')==''){
			redirect(base_url().'user/login');
			exit;
		}
		$profile_row = $this->member_model->get_member_by_username($this->session->userdata('username'));
		$data['row'] = $profile_row;

		$this->form_validation->set_rules('name', 'Name', 'trim|secure|required');
		$this->form_validation->set_rules('gender', 'Gender', 'trim|secure');
		$this->form_validation->set_rules('division', 'Division', 'trim|secure');
		$this->form_validation->set_rules('dob', 'dob', 'trim|secure');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|secure');
		$this->form_validation->set_rules('email', 'Email', 'trim|secure|valid_email');

		// $this->form_validation->set_rules('location', 'location', 'trim|secure');

		$this->form_validation->set_rules('work_type', 'work_type', 'trim|secure');
		$this->form_validation->set_rules('work_zone', 'work_zone', 'trim|secure');
		$this->form_validation->set_rules('work_day', 'work_day', 'trim|secure');
		$this->form_validation->set_rules('work_time', 'work_time', 'trim|secure');
		$this->form_validation->set_rules('work_career', 'work_career', 'trim|secure');
		$this->form_validation->set_rules('work_pay', 'work_pay', 'trim|secure');
		$this->form_validation->set_rules('license', 'license', 'trim|secure');
		$this->form_validation->set_rules('work_title', 'work_title', 'trim|secure');
		$this->form_validation->set_rules('work_desc', 'work_desc', 'trim|secure');

		$this->form_validation->set_rules('emp_type', 'emp_type', 'trim|secure');
		$this->form_validation->set_rules('emp_zone', 'emp_zone', 'trim|secure');
		$this->form_validation->set_rules('emp_term', 'emp_term', 'trim|secure');
		$this->form_validation->set_rules('emp_date', 'emp_date', 'trim|secure');
		$this->form_validation->set_rules('emp_day', 'emp_day', 'trim|secure');
		$this->form_validation->set_rules('emp_time', 'emp_time', 'trim|secure');
		$this->form_validation->set_rules('emp_pay', 'emp_pay', 'trim|secure');
		$this->form_validation->set_rules('emp_age', 'emp_age', 'trim|secure');
		$this->form_validation->set_rules('emp_career', 'emp_career', 'trim|secure');
		$this->form_validation->set_rules('animal', 'animal', 'trim|secure');
		$this->form_validation->set_rules('emp_title', 'emp_title', 'trim|secure');
		$this->form_validation->set_rules('emp_desc', 'emp_desc', 'trim|secure');


		if ($this->form_validation->run() === FALSE) {

			$data['title'] = SITE_NAME.': '.$this->session->userdata('name');
				$this->load->view('common/before_head_close');
				$this->load->view('common/header');
				$this->load->view('profile_edit_view', $data);
				$this->load->view('common/footer');
				$this->load->view('common/before_body_close');
			return;
		}
		$dob = date("Y-m-d",strtotime($this->input->post('dob')));
		$member_array = array(
								'name' => $this->input->post('name'),
								'gender' => $this->input->post('gender'),
								'division' => $this->input->post('division'),
								'dob' => $dob,
								'phone' => $this->input->post('phone'),
								'email' => $this->input->post('email'),

								// 'location' => $this->input->post('location'),

								'work_type' => $this->input->post('work_type'),
								'work_zone' => $this->input->post('work_zone'),
								'work_day' => $this->input->post('work_day'),
								'work_time' => $this->input->post('work_time'),
								'work_career' => $this->input->post('work_career'),
								'work_pay' => $this->input->post('work_pay'),
								'license' => $this->input->post('license'),
								'work_title' => $this->input->post('work_title'),
								'work_desc' => $this->input->post('work_desc'),

								'emp_type' => $this->input->post('emp_type'),
								'emp_zone' => $this->input->post('emp_zone'),
								'emp_term' => $this->input->post('emp_term'),
								'emp_date' => $this->input->post('emp_date'),
								'emp_day' => $this->input->post('emp_day'),
								'emp_time' => $this->input->post('emp_time'),
								'emp_pay' => $this->input->post('emp_pay'),
								'emp_age' => $this->input->post('emp_age'),
								'emp_career' => $this->input->post('emp_career'),
								'animal' => $this->input->post('animal'),
								'emp_title' => $this->input->post('emp_title'),
								'emp_desc' => $this->input->post('emp_desc')

		);
		
		if (!empty($_FILES['photo']['name'])){
			
			$config['upload_path'] = realpath(APPPATH . '../glancePublic/uploads/member_images/');
			$config['allowed_types'] = 'gif|jpg|png';
			$config['overwrite'] = true;
			$config['max_size'] = 12000;
			$config['file_name'] = $this->session->userdata('member_id').time();
			$this->upload->initialize($config);
			$real_path = realpath(APPPATH . '../glancePublic/uploads/member_images/');
			
			if ($this->upload->do_upload('photo')){
				if($profile_row->photo){
					@unlink($real_path.'/'.$profile_row->photo);
					@unlink($real_path.'/thumb_'.$profile_row->photo);
				}
			}
			
			$image = array('upload_data' => $this->upload->data());
			$image_name = $image['upload_data']['file_name'];
			
			
			//Image resizing
			$objImg = new Simple_Image();
			$small_img = 'thumb_'.$image_name;
			$objImg->load($real_path.'/'.$image_name);
			$objImg->resizeToWidth(80);
			$objImg->resizeToHeight(80);
			$objImg->save($real_path.'/'.$small_img);
			$member_array['photo']=$image_name;
			$this->session->set_userdata('photo', $image_name);
		}

		if (!empty($_FILES['photo_li']['name'])){
			
			$config['upload_path'] = realpath(APPPATH . '../glancePublic/uploads/member_images/');
			$config['allowed_types'] = 'gif|jpg|png';
			$config['overwrite'] = true;
			$config['max_size'] = 12000;
			$config['file_name'] = $this->session->userdata('member_id').time();
			$this->upload->initialize($config);
			$real_path = realpath(APPPATH . '../glancePublic/uploads/member_images/');
			
			if ($this->upload->do_upload('photo_li')){
				if($profile_row->photo_li){
					@unlink($real_path.'/'.$profile_row->photo_li);	
					@unlink($real_path.'/thumb_'.$profile_row->photo_li);	
				}
			}
			
			$image = array('upload_data' => $this->upload->data());	
			$image_name = $image['upload_data']['file_name'];
			
			
			//Image resizing
			$objImg = new Simple_Image();
			$small_img = 'thumb_'.$image_name;
			$objImg->load($real_path.'/'.$image_name);
			$objImg->resizeToWidth(300);
			$objImg->resizeToHeight(400);
			$objImg->save($real_path.'/'.$small_img);
			$member_array['photo_li']=$image_name;
			$this->session->set_userdata('photo_li', $image_name);
		}

		echo "<script>alert(\"$member_array\");</script>";


		$this->session->set_userdata('division', $this->input->post('division'));
		$this->member_model->update_member($this->session->userdata('member_id'),$member_array);


		redirect(base_url().'profile/'.$this->session->userdata('username'));
	}

	public function changepass() {
		if($this->session->userdata('username')==''){
			redirect(base_url().'user/login');
			exit;
		}
		
		$this->form_validation->set_rules('password', 'Password', 'trim|required|secure|matches[con_password]');
		$this->form_validation->set_rules('con_password', 'Password Confirmation', 'required');	
	
		if ($this->form_validation->run() === FALSE) {
			$data['title'] = SITE_NAME.': '.$this->session->userdata('name');
			$this->load->view('common/before_head_close');
			$this->load->view('common/header');
			$this->load->view('profile_edit_view', $data);
			$this->load->view('common/footer');
			$this->load->view('common/before_body_close');

			// $this->load->view('account_setting_view',$data);
			return;
		}
		$password = md5($this->input->post('password'));
		$member_array = array(
							'password' => $password
		);
		
		$this->member_model->update_member($this->session->userdata('member_id'),$member_array);
		$this->session->set_flashdata('msg', 'Password changed successfully.');

		echo ("<script>alert(\"비밀번호를 성공적으로 변경했습니다.\");location.href='/edit_profile';</script>");

		// redirect(base_url().'profile/'.$this->session->userdata('username'));
	}

}
