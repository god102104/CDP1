<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data['title']= SITE_NAME.': 인사말';
		$content = $this->contact_model->getPageContent(2);
		$data['content'] = $content;
		$this->load->view('common/before_head_close');
		$this->load->view('common/header');
		$this->load->view('about_view', $data);
		$this->load->view('common/footer');
		$this->load->view('common/before_body_close');
	}
}
