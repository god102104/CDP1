<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Privacy extends CI_Controller {
	
	public function index()
	{
		if($this->session->userdata('username')==''){
			redirect(base_url().'user/login');
			exit;
		}
		
		$profile_row = $this->member_model->get_member_by_username($this->session->userdata('username'));
		$data['row'] = $profile_row;
		
		$privacy_row = $this->member_model->get_member_privacy_by_mem_id($this->session->userdata('member_id'));
		
		$data['privacy_row'] = $privacy_row;
		
		$this->form_validation->set_rules('email_setting', 'Email appear setting', 'trim|required|secure');
		$this->form_validation->set_rules('phone_setting', 'Phone appear setting', 'trim|required|secure');	
		$this->form_validation->set_rules('gallery_setting', 'Gallery appear setting', 'trim|required|secure');
		$this->form_validation->set_rules('dob_setting', 'Date Of Birth appear setting', 'trim|required|secure');
		$this->form_validation->set_rules('location_setting', 'Location appear setting', 'trim|required|secure');
		$this->form_validation->set_rules('msg_setting', 'Message sending setting', 'trim|required|secure');
		$this->form_validation->set_rules('comment_setting', 'Comments sending setting', 'trim|required|secure');
	
		if ($this->form_validation->run() === FALSE) {
			$data['title'] = SITE_NAME.': '.$this->session->userdata('name');
			$this->load->view('privacy_view',$data);
			return;
		}
		
		/*echo "<pre>";
		print_r($this->input->post());*/
		
		$member_setting = array(
								'email_setting' => $this->input->post('email_setting'),
								'phone_setting' => $this->input->post('phone_setting'),
								'dob_setting' => $this->input->post('dob_setting'),
								'location_setting' => $this->input->post('location_setting'),
								'msg_setting' => $this->input->post('msg_setting'),
								'comment_setting' => $this->input->post('comment_setting'),
								'gallery_setting' => $this->input->post('gallery_setting'),
								'mem_id'=>$this->session->userdata('member_id')
								
								);
		
		/*echo "<pre>";
		print_r($member_setting); exit;*/
		
		$this->member_model->delete_member_privacy($this->session->userdata('member_id'));
		$this->member_model->add_member_privacy($member_setting);

		redirect(base_url().'privacy');
	}
		
}
