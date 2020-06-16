<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index(){
		
		if(!$this->session->userdata('is_admin_login')){
			redirect(base_url().'admin');
			exit;
		}
		
		$data['title'] = SITE_NAME.': Dashboard';
		$data['msg'] = '';
		$this->load->view('admin/dashboard_view', $data);
		return;
	}
		
}
