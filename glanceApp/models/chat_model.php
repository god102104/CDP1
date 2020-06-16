<?php
class Chat_Model extends CI_Model {
    public function __construct() {
       // parent::__construct();
	   $this->load->database();
    }
    
	public function add_contact($data){
  
            $return = $this->db->insert('chat', $data);
            if ((bool) $return === TRUE) {
                return $this->db->insert_id();
            } else {
                return $return;
            }       
			
	}
	
	public function get_chat_by_username($username) {
		
		$Q = $this->db->query("SELECT * FROM chat WHERE (chat.to = 'johndoe' AND recd = 0) ORDER BY id ASC");
		
        if ($Q->num_rows > 0) {
            $return = $Q->result();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
		
	}

}
?>
