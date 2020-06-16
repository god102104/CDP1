<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pages extends CI_Controller {
	public function index(){
		$data['title'] = SITE_NAME.': Page Management';
		$data['msg'] = '';
		
		//Pagination starts
		$total_rows = $this->cms_model->record_count('pp_cms');
		$config = pagination_configuration(base_url("admin/pages"), $total_rows, 50, 3, 5, true);
		
		$this->pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(3) : 0;
		$page_num = $page-1;
		$page_num = ($page_num<0)?'0':$page_num;
		$page = $page_num*$config["per_page"];
		$data["links"] = $this->pagination->create_links();
		//Pagination ends
		
		$obj_result = $this->cms_model->get_all_records($config["per_page"], $page);
		$data['result'] = $obj_result;
		$data["total_rows"] = $total_rows;
		$this->load->view('admin/pages/pages_view', $data);
		return;
	}
	
	
	public function add(){
		$data['title'] = SITE_NAME.': Content Management';
		$data['msg'] = '';
		$data_array = array();
		$this->form_validation->set_rules('pageTitle', 'Heading', 'trim|required');
		$this->form_validation->set_rules('pageSlug', 'Page Slug', 'trim|required');
		$this->form_validation->set_rules('seoMetaTitle', 'Meta Title', 'trim|required|max_length[65]');
		$this->form_validation->set_rules('seoMetaKeyword', 'Meta Keywords', 'trim');
		$this->form_validation->set_rules('seoMetaDescription', 'Meta Description', 'trim|max_length[150]');	
		$this->form_validation->set_rules('editor1', 'Page Content', 'trim|required');
		$this->form_validation->set_error_delimiters('<span class="err" style="padding-left:2px;">', '</span><br />');
		
		if ($this->form_validation->run() === FALSE) {
			$form_data =$this->load->view('admin/pages/pages_add_view',$data, true);
			echo json_encode(array('msg'=>validation_errors(), 'form_data'=>$form_data));
			exit;
		}
		$page_slug = (stristr($this->input->post('pageSlug'),'.html')?$this->input->post('pageSlug'):$this->input->post('pageSlug').'.html');
		$data_array = array(
							'pageTitle' => $this->input->post('pageTitle'),
							'pageSlug' => $page_slug,
							'seoMetaTitle' => $this->input->post('seoMetaTitle'),
							'seoMetaKeyword' => $this->input->post('seoMetaKeyword'),
							'seoMetaDescription' => $this->input->post('seoMetaDescription'),
							'pageContent' => $this->input->post('editor1'),
							'menuTop' => $this->input->post('menuTop'),
							'menuBottom' => $this->input->post('menuBottom'),
							'dated' => date("Y-m-d H:i:s")
		);
		
		$this->cms_model->add($data_array);
		echo json_encode(array('msg'=>'done'));
	}
		
	public function update($id=''){
		
		if($id==''){
			echo json_encode(array('msg'=>'Page ID is missing. Please refresh the page and try again.'));
			exit;
		}
		$row = $this->cms_model->get_record_by_id($id);
		//$data['page_gallery_result'] = $this->pages_gallery_model->get_record_by_page_id($id);
		$data['row']=$row ;
		$data['msg'] = '';
		
		$this->form_validation->set_rules('pageTitle', 'Heading', 'trim|required');
		$this->form_validation->set_rules('pageSlug', 'Page Slug', 'trim|required');
		$this->form_validation->set_rules('seoMetaTitle', 'Meta Title', 'trim|required|max_length[65]');
		$this->form_validation->set_rules('seoMetaKeyword', 'Meta Keywords', 'trim');
		$this->form_validation->set_rules('seoMetaDescription', 'Meta Description', 'trim|max_length[150]');	
		$this->form_validation->set_rules('editor1', 'Page Content', 'trim|required');
		$this->form_validation->set_error_delimiters('<span class="err" style="padding-left:2px;">', '</span><br />');
		
		if ($this->form_validation->run() === FALSE) {
			$form_data = $this->load->view('admin/pages/pages_edit_view',$data, true);
			echo json_encode(array('msg'=>validation_errors(),'form_data'=>$form_data));
			exit;
		}
		
		$page_slug = (stristr($this->input->post('pageSlug'),'.html')?$this->input->post('pageSlug'):$this->input->post('pageSlug').'.html');
		
		$data_array = array(
							'pageTitle' => $this->input->post('pageTitle'),
							'pageSlug' => $page_slug,
							'seoMetaTitle' => $this->input->post('seoMetaTitle'),
							'seoMetaKeyword' => $this->input->post('seoMetaKeyword'),
							'seoMetaDescription' => $this->input->post('seoMetaDescription'),
							'menuTop' => $this->input->post('menuTop'),
							'menuBottom' => $this->input->post('menuBottom'),
							'pageContent' => $this->input->post('editor1')
		);
		
		$this->cms_model->update($id, $data_array);
		echo json_encode(array('msg'=>'done'));
		exit;
	}
	
	public function status($id='', $current_staus=''){
		
		if($id==''){
			echo 'error';
			exit;
		}
		if($current_staus==''){
			echo 'invalid current status provided.';
			exit;
		}
		
		if($current_staus=='Published')
			$new_status= 'Inactive';
		else
			$new_status= 'Published';
		
		$data = array (
						'pageStatus' => $new_status
		);
		
		$this->cms_model->update($id, $data);
		echo $new_status;
		exit;
	}	
	
	public function delete($id=''){
		
		if($id==''){
			echo json_encode(array('msg'=>'Oops! page ID is missing. Please refresh the page and try again.'));
			exit;
		}
		
		$this->cms_model->delete($id);
		//$this->menu_cms_model->delete_by_page_id($id);
		echo 'done';
		exit;
	}
	
//For Page Gallery
	
	public function remove_page_gallery_image($id=''){
		$row = $this->pages_gallery_model->get_record_by_id($id);
		$this->pages_gallery_model->delete($id);
		$real_path = realpath(APPPATH . '../public/uploads/page_gallery/');
		@unlink($real_path.'/'.$row->galleryImageFile);
		echo 'done';
		exit;
	}
	
}