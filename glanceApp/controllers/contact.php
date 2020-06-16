<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|secure');
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|secure');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|secure|valid_email');
		$this->form_validation->set_rules('comment', 'Comment', 'trim|required|secure');
		
		if ($this->form_validation->run() === FALSE) {
			$data['title']= SITE_NAME.': Contact Us';
			$this->load->view('common/before_head_close');
			$this->load->view('common/header');
			$this->load->view('contact_view', $data);
			$this->load->view('common/footer');
			$this->load->view('common/before_body_close');
			return;
		}

		$contact_array = array(
								'fname' => $this->input->post('fname'),
								'lname' => $this->input->post('lname'),
								'email' => $this->input->post('email'),
								'comment' => $this->input->post('comment'),
								'date_added' => date('Y-m-d H:i:s')
								);
		
		$full_name = $this->input->post('fname').' '.$this->input->post('lname');
		$this->contact_model->add_contact($contact_array);
		
		$row_email = $this->email_templates_model->get_record_by_id(11);
		$from_email=replace_string('{USER_EMAIL}',$this->input->post('email'),$row_email->from_email);
		$from_name = replace_string('{USER_NAME}',$full_name,$row_email->from_name);
		
		$config = array();
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html';
	
		$this->email->initialize($config);
		$this->email->clear(TRUE);
		$this->email->from($from_email, $from_name);
		$this->email->to($this->input->post('email'));
		
		$this->email->subject($row_email->email_subject);
		$mail_message = $this->email_drafts_model->email_draft_contact_admin($row_email->email_content, $this->input->post('fname'), $this->input->post('lname'), $this->input->post('email'), $this->input->post('comment'));
		$this->email->message($mail_message);					
		$this->email->send();
		redirect(base_url().'contact');
		
	}
}
