<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profiles_Lists extends CI_Controller {
	
	public function index(){
		
		if(!$this->session->userdata('is_admin_login')){
			redirect(base_url().'admin');
			exit;
		}

		$profiles_view = $this->member_model->get_all_profiles();
		$data['profiles_view']= $profiles_view;
		$data['title'] = SITE_NAME.': All Profiles';
		$this->load->view('admin/profile_view', $data);
		return;
	}
		
}
