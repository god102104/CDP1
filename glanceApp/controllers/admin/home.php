<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
	
		$data['title'] = SITE_NAME.': Login';
		$data['msg'] = '';
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required|secure');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|secure');
		
		if ($this->form_validation->run() === FALSE) {
			$this->load->view('admin/home_view', $data);
			return;
		}
		
		$password = md5($this->input->post('password'));
		
		$userRow = $this->admin_model->authenticate_admin($this->input->post('username'), $password);

		if(!$userRow){
			$data['msg'] = '아이디 또는 비밀번호를 확인해주세요';
			$this->load->view('admin/home_view', $data);
			return;
		}
			
		$admin_data = array(
				'admin_id' => $userRow->id,
				 'admin_name' => $userRow->admin_name,
				 'is_admin_login' => TRUE);
		$this->session->set_userdata($admin_data);
		
		redirect(base_url().'admin/dashboard','');		
	}	
		
	public function logout() {
						
		$user_data = array(
		 'admin_id' => '',
		 'admin_name' => '',
		 'is_admin_login' => FALSE);
		  
		$this->session->set_userdata($user_data);
		$this->session->unset_userdata($user_data);
		redirect(base_url(), 'refresh'); 
	}
	
	
	public function update_pass() {
		
		if(!$this->session->userdata('is_admin_login')){
			redirect(base_url().'admin');
			exit;
		}
		$data['msg']='';
		$this->form_validation->set_rules('change_password', 'password', 'trim|required|secure|min_length[5]');
		$this->form_validation->set_rules('confirm_password', 'confirm password', 'trim|required|secure|matches[change_password]');

		if ($this->form_validation->run() === FALSE) 
		{
			$this->load->view('admin/edit_admin_view', $data);
			return;
		}
		
		$password = md5($this->input->post('change_password'));
		$data_array = array('admin_password' => $password);
		$this->admin_model->update_records($this->session->userdata('admin_id'), $data_array);
		$this->session->set_flashdata('msg', '비밀번호를 변경하였습니다.');
		redirect(base_url()."admin/home/update_pass");
	}
}
