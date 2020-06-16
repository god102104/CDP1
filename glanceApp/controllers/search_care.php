<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search_Care extends CI_Controller {

	public function index()
	{
		
		//$this->form_validation->set_rules('search', 'Search', 'trim|required|secure');
		
		//if ($this->form_validation->run() === FALSE) {
			
			$work_zone = $this->input->post('work_zone');
			$work_type = $this->input->post('work_type');
			$work_career = $this->input->post('work_career');
			$gender = $this->input->post('gender');
			$age_frm = $this->input->post('age_frm');
			// $age_to = $this->input->post('age_to');

			// $search_row = $this->member_model->search_member_advance($work_zone,$work_type,$work_day,$work_career,$work_time,$gender,$age_frm,$age_to);
			$search_row = $this->member_model->search_member_advance_care($work_zone,$work_type,$work_career,$gender,$age_frm);
			$data['search_row'] = $search_row;
			$data['title'] = '검색 결과';

			$this->load->view('common/before_head_close');
			$this->load->view('common/header');
			$this->load->view('search_care_view', $data);
			$this->load->view('common/footer');
			$this->load->view('common/before_body_close');

			return;
		//}
		
	}
}
