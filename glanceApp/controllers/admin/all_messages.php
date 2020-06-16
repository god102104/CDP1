<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class All_Messages extends CI_Controller {
	
	public function index(){
		
		if(!$this->session->userdata('is_admin_login')){
			redirect(base_url().'admin');
			exit;
		}
		
		$message_row = $this->message_model->get_all_profiles_messages();
		
		$data['title'] = SITE_NAME.': User Messages';
		$data['msg'] = '';
		$c = 0;
		if($message_row) {
			
			foreach($message_row as $messagesDetail) {
				$messageRow[$c]['date_send'] = $messagesDetail->date_send;
				$messageRow[$c]['sender'] = $this->member_model->get_member_name_by_id($messagesDetail->sender_id);
				$messageRow[$c]['reciever'] = $this->member_model->get_member_name_by_id($messagesDetail->reciever_id);
				$messageRow[$c]['message'] = $messagesDetail->message;
				$messageRow[$c]['messages_id'] = $messagesDetail->messages_id;
				$c++;
			}
		} else {
			
			$messageRow = 0;
		}
		$data['message_row'] = $messageRow;
		$this->load->view('admin/messages_view', $data);
		return;
	
	}
	
	public function message_delete($id) {
		
		$rs = $this->message_model->delete_message($id);
		$this->session->set_flashdata('msg', '메시지를 삭제하였습니다.');
		redirect(base_url()."admin/all_messages");
		
	}
	
		
}
