<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {
	public function index()
	{
		$all_members_result = $this->member_model->get_all_member_front(20,0);
		$all_reviews = $this->reviews_model->get_all_reviews();
		// $recommend_members = $this->member_model->get_recommender_member_front($this->session->userdata('username'));

		$content = $this->contact_model->getPageContent(5);
		$data['content'] = stripslashes($content->content);
		$content2= $this->contact_model->getPageContent(6);
		$data['content2'] = stripslashes($content2->content);

		$data['all_members_result'] = $all_members_result;
		$data['all_reviews'] = $all_reviews;
		// $data['all_members_result'] = $recommend_members;
		
		$data['title']= '웰컴 투 요양네비';
		$this->load->view('common/before_head_close');
		$this->load->view('common/header');
		$this->load->view('home_view', $data);
		$this->load->view('common/footer');
		$this->load->view('common/before_body_close');
		return;
		
	}
	
}