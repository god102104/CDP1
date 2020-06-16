<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Terms extends CI_Controller {

	public function index()
	{
		$content = $this->contact_model->getPageContent(1);
		$data['content'] = $content;
		$data['title']= SITE_NAME.': Terms';
		$this->load->view('terms_view',$data);
	}
}
