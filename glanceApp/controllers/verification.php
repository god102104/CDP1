<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Verification extends CI_Controller {
	
	public function index($vcode=''){
		
		$data['msg'] = 'An email has been sent to you. Please verify it to activate your account.';
		
		if($vcode){
			$row = $this->member_model->authenticate_by_verification_code($vcode);	
			
			if($row){

				$this->member_model->update_member($row->id, array('first_login_date' => date("Y-m-d H:i:s"), 'last_login_date' => date("Y-m-d H:i:s"), 'sts' => 'active'));	
				
				 $user_data = array(
				 'member_id' => $row->id,
				 'username' => $row->username,
				 'photo' => $row->photo,
				 'name' => $row->name,
				 'city' => $row->city,
				 'is_user_login' => TRUE);
				 
				 $this->session->set_userdata($user_data);
				 
				 redirect(base_url().'profile/'.$row->username.'/edit', '');
				 exit;
			}
			else
				$data['msg'] = 'There is something wrong with verification.';
		}
		
		$data['title'] = SITE_NAME.': Verification';

		$this->load->view('verification_view', $data);
		
	}	

}
