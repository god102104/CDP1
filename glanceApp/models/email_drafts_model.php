<?php
class Email_drafts_model extends CI_Model {
	
	//put your code here
    public function __construct() {
        parent::__construct();
    }
    
	
	public function get_force_send_email_draft($email,$password,$pin,$email_body){
		
		$email_body=replace_string('{EmailAddress}',$email,$email_body);
		$email_body=replace_string('{Password}',$password,$email_body);
		$email_body=replace_string('{PIN}',$pin,$email_body);
		
		return $email_body;
	}
	
	public function get_verification_email($email_body,$verification_code){
		$email_body=replace_string('{SITE_URL}',base_url(),$email_body);
		$email_body=replace_string('{VERIFICATION_CODE}',$verification_code,$email_body);
		$email_body=replace_string('{SITENAME}',SITE_NAME,$email_body);
		return $email_body; 
	}
	
	public function get_reset_verification_email($email_body, $verification_code){
		$email_body=replace_string('{SITE_URL}',base_url(),$email_body);
		$email_body=replace_string('{VERIFICATION_CODE}',$verification_code,$email_body);
		$email_body=replace_string('{SITENAME}',SITE_NAME,$email_body);
		return $email_body; 

	}

	public function email_draft_contact_admin($email_body,$fname, $lname, $email, $comment) {
		$email_body=replace_string('{SITE_URL}',base_url(),$email_body);
		$email_body=replace_string('{FIRST_NAME}',$fname,$email_body);
		$email_body=replace_string('{LAST_NAME}',$lname,$email_body);
		$email_body=replace_string('{EMAIL}',$email,$email_body);
		$email_body=replace_string('{COMMENT}',$comment,$email_body);
		$email_body=replace_string('{SITENAME}',SITE_NAME,$email_body);
		return $email_body; 
	}
}
?>