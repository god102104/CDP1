<?php
class Profile_Views_Model extends CI_Model {
    public function __construct() {
       // parent::__construct();
	   $this->load->database();
    }
    
	public function add_profile_viewer($data){
  			
            $this->db->insert('profile_views', $data);
	
	}	
	
	public function is_ip_already_viewed_profile($member_id){

		$this->db->select('id');
		$this->db->from('profile_views');
		$this->db->where("ip_address", $this->input->ip_address());
		$this->db->where("member_id", $member_id);
        $Q = $this->db->get();
        if ($Q->num_rows > 0) {
            $return = 1;
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
	}
	
	public function count_profile_views($member_id){
		
		$this->db->where('member_id', $member_id);
		$this->db->from('profile_views');
		return $this->db->count_all_results();
	}
	
}
?>
