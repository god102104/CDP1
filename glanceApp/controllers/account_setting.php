<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account_Setting extends CI_Controller {
	
	public function index()
	{
		if($this->session->userdata('username')==''){
			redirect(base_url().'user/login');
			exit;
		}
		
		$this->form_validation->set_rules('password', 'Password', 'trim|required|secure|matches[con_password]');
		$this->form_validation->set_rules('con_password', 'Password Confirmation', 'required');	
	
		if ($this->form_validation->run() === FALSE) {
			$data['title'] = SITE_NAME.': '.$this->session->userdata('name');
			$this->load->view('account_setting_view',$data);
			return;
		}
		$password = md5($this->input->post('password'));
		$member_array = array(
							'password' => $password
		);
		
		$this->member_model->update_member($this->session->userdata('member_id'),$member_array);
		$this->session->set_flashdata('msg', 'Password changed successfully.');
		redirect(base_url().'account_setting');
	}
		
}
