<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

	public function index()
	{
		
		//$this->form_validation->set_rules('search', 'Search', 'trim|required|secure');
		
		//if ($this->form_validation->run() === FALSE) {
			
			$search = $this->input->post('search');
			$location = $this->input->post('location');
			$division = $this->input->post('division');

			// $work_zone = $this->input->post('location');
			// $emp_zone = $this->input->post('location');

			// 정용진 2020.05.21
			// 메인 검색 시 division에 따른 검색 (care, emp)
			if($division == 'yoyang') {
				$search_row = $this->member_model->search_member_care($search,$location,$division);
				$data['search_row'] = $search_row;
				$this->load->view('common/before_head_close');
				$this->load->view('common/header');
				$this->load->view('search_care_view', $data);
				$this->load->view('common/footer');
				$this->load->view('common/before_body_close');
			} else {
				$search_row = $this->member_model->search_member_emp($search,$location,$division);
				$data['search_row'] = $search_row;
				$this->load->view('common/before_head_close');
				$this->load->view('common/header');
				$this->load->view('search_emp_view', $data);
				$this->load->view('common/footer');
				$this->load->view('common/before_body_close');
			}

			// $search = $this->input->post('search');
			// $search_row = $this->member_model->search_member($search);
			// $data['search_row'] = $search_row;
			// $data['title'] = '요양사 검색';
			return;
		//}
		
	}
}
