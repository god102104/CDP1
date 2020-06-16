<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reviews extends CI_Controller {

	public function index() {

		// $this->form_validation->set_rules('name', 'Name', 'trim|required|secure');
		$this->form_validation->set_rules('grade', 'Grade', 'trim|required|secure');
		$this->form_validation->set_rules('review', 'Review', 'trim|required|secure');
		
		if ($this->form_validation->run() === FALSE) {

			$all_reviews = $this->reviews_model->get_all_reviews();
			$data['all_reviews'] = $all_reviews;
			$data['title']= SITE_NAME.': 후기 게시판';
			$this->load->view('common/before_head_close');
			$this->load->view('common/header');
			$this->load->view('review_view', $data);
			$this->load->view('common/footer');
			$this->load->view('common/before_body_close');
			return;
		}
		
		$memid_From = $this->member_model->get_member_by_username($this->session->userdata('username'));
		
		$review_array = array(
								'member_id' => $memid_From->id,
								'grade' => $this->input->post('grade'),
								'date_review' => date("Y-m-d H:i:s"),
								// 'name' => $this->input->post('name'),
								'reviews' => $this->input->post('review')
							);

		$return = $this->reviews_model->add_reviews($review_array);
		redirect(base_url().'reviews');

	}

}