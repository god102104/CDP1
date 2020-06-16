<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages_Manage extends CI_Controller {
	
	public function index(){
		
		if(!$this->session->userdata('is_admin_login')){
			redirect(base_url().'admin');
			exit;
		}
		
		$result = $this->contact_model->getAllPageContent();
			
		$data['title'] = SITE_NAME.': CMS';
		$data['msg'] = '';
		$data['result'] = $result;
		$this->load->view('admin/manage_cms', $data);
		return;
		
	}	
	
	public function edit($id){
		
		if(!$this->session->userdata('is_admin_login')){
			redirect(base_url().'admin');
			exit;
		}
		
		if(!$id){
			redirect(base_url().'admin/pages_manage');
			exit;
		}
		
		$content = $this->contact_model->getPageContent($id);
			
		$data['title'] = SITE_NAME.': CMS';
		$data['msg'] = '';
		$data['cms_id'] = $id;
		$data['page_meta_title'] = $content->page_meta_title;
		$data['page_meta_keywords'] = $content->page_meta_keywords;
		$data['page_meta_desc'] = $content->page_meta_desc;
		
		$data['content'] = $content->content;
		$this->load->view('admin/edit_cms_view', $data);
		return;
		
	}
	
	
	public function update_cms($id) {
		
		if(!$id){
			redirect(base_url().'admin/pages_manage');
			exit;
		}
		
		$contact_array = array(
								'content' => addslashes($this->input->post('editor1')),
								'page_meta_title' => addslashes($this->input->post('page_meta_title')),
								'page_meta_keywords' => addslashes($this->input->post('page_meta_keywords')),
								'page_meta_desc' => addslashes($this->input->post('page_meta_desc')),
		);
		
		$this->contact_model->update_content($id,$contact_array);
		$this->session->set_flashdata('msg', '내용을 변경하였습니다.');
		redirect(base_url()."admin/pages_manage/edit/".$id);
	}
	
}
