<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forms extends CI_Controller {

	public function index(){
		
		$data['title'] = SITE_NAME.': Forms';
		$data['msg'] = '';
		$this->load->view('admin/forms_view', $data);

	}	
		
}
