<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search_Profile_Location extends CI_Controller {
	
	public function index(){
		
		if(!$this->session->userdata('is_admin_login')){
			redirect(base_url().'admin');
			exit;
		}

		/*$profiles_view = $this->member_model->get_all_profiles();
		$data['profiles_view']= $profiles_view;*/
		$data['title'] = SITE_NAME.': Search By location';
		$this->load->view('admin/profile_searchlocation_view', $data);
		return;
	}
	
	public function result_location(){
		
		if(!$this->session->userdata('is_admin_login')){
			redirect(base_url().'admin');
			exit;
		}
		
		$search = $this->input->post('search');
		
		$profiles_view = $this->member_model->search_member_location($search);
		$data['profiles_view']= $profiles_view;
		$data['title'] = SITE_NAME.': Search Result';
		$data['heading'] = '지역';
		$this->load->view('admin/profile_search_view', $data);
		return;
	}
		
}
