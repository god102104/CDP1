<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Community extends CI_Controller {

	public function index() {
		$data['title']= SITE_NAME.': 자유 게시판';
		$this->load->view('common/before_head_close');
		$this->load->view('common/header');
		$this->load->view('community_view', $data);
		$this->load->view('common/footer');
		$this->load->view('common/before_body_close');
		return;
	}
}