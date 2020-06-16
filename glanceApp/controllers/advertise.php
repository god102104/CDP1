<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Advertise extends CI_Controller {

	public function index()
	{
		$data['title']= SITE_NAME.': Advertise';
		$this->load->view('advertise_view',$data);
	}
}
