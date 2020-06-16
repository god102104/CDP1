<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function index()
	{		
		$this->form_validation->set_rules('username', 'Username', 'trim|required|secure|alpha_dash|min_length[5]|is_unique[member.username]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|secure|min_length[7]');
		$this->form_validation->set_rules('name', 'Name', 'trim|required|secure');		
		$this->form_validation->set_rules('gender', 'Gender', 'trim|required|secure');
		$this->form_validation->set_rules('division', 'Division', 'trim|required|secure');
		$this->form_validation->set_rules('birth_month', 'Birth Month', 'trim|required|secure');
		$this->form_validation->set_rules('birth_day', 'Birth Day', 'trim|required|secure');
		$this->form_validation->set_rules('birth_year', 'Birth Year', 'trim|required|secure');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required|secure');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|secure|valid_email');
		$data['msg']='';
			if ($this->form_validation->run() === FALSE) {
			$data['title']= '요양내비';
			$this->load->view('common/before_head_close');
			$this->load->view('common/header');
			$this->load->view('signup_view', $data);
			$this->load->view('common/footer');
			$this->load->view('common/before_body_close');
			return;
		}
		
		$verification_code = md5($this->input->post('email').time());
		$password = md5(strip_tags($this->input->post('password')));
		
		$member_array = array(
								'username' => strip_tags($this->input->post('username')),
								'password' => $password,
								'name' => strip_tags($this->input->post('name')),
								'gender' => strip_tags($this->input->post('gender')),
								'division' => strip_tags($this->input->post('division')),
								'dob' => $this->input->post('birth_year').'-'.$this->input->post('birth_month').'-'.$this->input->post('birth_day'),
								'dated' => date("Y-m-d H:i:s"),
								'phone' => strip_tags($this->input->post('phone')),
								'email' => strip_tags($this->input->post('email')),
								'verification_code' => $verification_code
		);
		$this->member_model->add_member($member_array);

		echo ("<script>alert(\"회원가입이 되셨습니다.로그인해주세요.\");location.href='/user';</script>");
		//redirect(base_url().'user');
		
	}
}
