<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notice extends CI_Controller {

	public function index()
	{
		$data['title']= SITE_NAME.': 공지사항';
		// $content = $this->contact_model->getPageContent(2);
		// $data['content'] = $content;
		$this->load->view('common/before_head_close');
		$this->load->view('common/header');
		$this->load->view('notice_view', $data);
		$this->load->view('common/footer');
		$this->load->view('common/before_body_close');
	}

	public function detail_1() {
		$data['title']= SITE_NAME.': 최신글1';
		$this->load->view('common/before_head_close');
		$this->load->view('common/header');
		$this->load->view('notice_detail_1', $data);
		$this->load->view('common/footer');
		$this->load->view('common/before_body_close');
	}
	public function detail_2() {
		$data['title']= SITE_NAME.': 최신글2';
		$this->load->view('common/before_head_close');
		$this->load->view('common/header');
		$this->load->view('notice_detail_2', $data);
		$this->load->view('common/footer');
		$this->load->view('common/before_body_close');
	}
	public function detail_3() {
		$data['title']= SITE_NAME.': 최신글3';
		$this->load->view('common/before_head_close');
		$this->load->view('common/header');
		$this->load->view('notice_detail_3', $data);
		$this->load->view('common/footer');
		$this->load->view('common/before_body_close');
	}

	public function service() {
		$data['title']= SITE_NAME.': 자주묻는질문';
		$this->load->view('common/before_head_close');
		$this->load->view('common/header');
		$this->load->view('service_view', $data);
		$this->load->view('common/footer');
		$this->load->view('common/before_body_close');
	}

	public function price() {
		$data['title']= SITE_NAME.': 결재';
		$this->load->view('common/before_head_close');
		$this->load->view('common/header');
		$this->load->view('price_view', $data);
		$this->load->view('common/footer');
		$this->load->view('common/before_body_close');
	}
}
