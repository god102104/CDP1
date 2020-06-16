<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ads extends CI_Controller {
	
	public function index(){
		
		if(!$this->session->userdata('is_admin_login')){
			redirect(base_url().'admin');
			exit;
		}
		
		$content = $this->ads_model->get_content();
			
		$data['title'] = SITE_NAME.': Ads Management';
		$data['msg'] = '';
		$data['content'] = $content->content;
		$this->load->view('admin/edit_ads_view', $data);
		return;
		
	}	
	
	public function update_data() {
		
		
		$contact_array = array(
								'content' => $this->input->post('content'),
		);
		
		$this->ads_model->update_records($contact_array);
		$this->session->set_flashdata('msg', '광고를 변경하였습니다.');
		redirect(base_url()."admin/ads");
	}
	
}
