<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Listing extends CI_Controller {

	public function index()
	{
		//Pagination starts
		$total_rows = $this->member_model->record_count_new('member', "WHERE sts='active'");
		$config = pagination_configuration(base_url("listing"), $total_rows, 24, 2, 4, true);
		
		$this->pagination->initialize($config);
        $page = ($this->uri->segment(1)) ? $this->uri->segment(2) : 0;
		$page_num = $page-1;
		$page_num = ($page_num<0)?'0':$page_num;
		$page = $page_num*$config["per_page"];
		$data["links"] = $this->pagination->create_links();
		//Pagination ends
		
		$all_members_result = $this->member_model->get_all_member_front($config["per_page"], $page);
			
			$data['all_members_result']= $all_members_result;
			$data['title']= SITE_NAME.' : 전체 리스트';
			$this->load->view('listing_view',$data);
	}
}
