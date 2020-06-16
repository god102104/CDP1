<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Disclaimer extends CI_Controller {

	public function index()
	{
		$content = $this->contact_model->getPageContent(4);
		$data['content'] = $content;
		$data['title']= SITE_NAME.': Disclaimer';
		$this->load->view('disclaimer_view',$data);
	}
}
