<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class All_User_Freinds extends CI_Controller {
	
	public function friend_list($id){
		
		if(!$this->session->userdata('is_admin_login')){
			redirect(base_url().'admin');
			exit;
		}
		
		$userRealName = $this->member_model->get_member_name_by_id($id);
		$friend_row = $this->friend_model->get_all_approved_friends($id);
		
		$data['title'] = SITE_NAME.': User Friends';
		$data['msg'] = '';
		$data['friend_row'] = $friend_row;
		$data['real_name'] = $userRealName;
		$this->load->view('admin/user_freinds_view', $data);
		return;
	
	}
		
}
