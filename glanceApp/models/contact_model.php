<?php
class Contact_Model extends CI_Model {
    public function __construct() {
       // parent::__construct();
	   $this->load->database();
    }
    
	public function add_contact($data){
  
            $return = $this->db->insert('contact_us', $data);
            if ((bool) $return === TRUE) {
                return $this->db->insert_id();
            } else {
                return $return;
            }       
			
	}
	
	public function getPageContent($id='') {
		
		$Q = $this->db->query("SELECT * FROM page_content where page_id = '".$id."'");
		
        if ($Q->num_rows > 0) {
            $return = $Q->row();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
		
	}
	
	public function getAllPageContent() {
		
		$Q = $this->db->query("SELECT * FROM page_content");
		
        if ($Q->num_rows > 0) {
            $return = $Q->result();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
		
	}
	
	public function update_content($id,$data){
		$this->db->where('page_id', $id);
		$return=$this->db->update('page_content', $data);
		return $return;
		
	}
	
}
?>
