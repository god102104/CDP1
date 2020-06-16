<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search_Emp extends CI_Controller {

	public function index()
	{
		
		//$this->form_validation->set_rules('search', 'Search', 'trim|required|secure');
		
		//if ($this->form_validation->run() === FALSE) {
			
			$emp_zone = $this->input->post('emp_zone');
			$emp_type = $this->input->post('emp_type');
			$emp_career = $this->input->post('emp_career');
			$gender = $this->input->post('gender');
			$emp_age = $this->input->post('emp_age');

			$search_row = $this->member_model->search_member_advance_emp($emp_zone,$emp_type,$emp_career,$gender,$emp_age);
			$data['search_row'] = $search_row;
			$data['title'] = '검색 결과';
			$this->load->view('common/before_head_close');
			$this->load->view('common/header');
			$this->load->view('search_emp_view', $data);
			$this->load->view('common/footer');
			$this->load->view('common/before_body_close');
			
			return;
		//}
		
	}
}
