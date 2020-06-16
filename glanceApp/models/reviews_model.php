<?php
class Reviews_Model extends CI_Model {
    public function __construct() {
       // parent::__construct();
	   $this->load->database();
    }
    
	public function add_reviews($data){
  
        $return = $this->db->insert('users_reviews', $data);
        if ((bool) $return === TRUE) {
            return $this->db->insert_id();
        } else {
            return $return;
        }
	}

    public function get_all_reviews(){
        $Q = $this->db->query("SELECT r.*, m.name, m.photo, m.username, m.division, REGEXP_REPLACE(`name`, '(?<=.{1}).', '○') AS `name_mask`
                               FROM users_reviews r
                               INNER JOIN member m 
                               ON m.id = r.member_id
                               ORDER BY date_review DESC");
        if ($Q->num_rows > 0) {
            $return = $Q->result();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
    }

    // public function get_all_reviews($member_id){
    //     $Q = $this->db->query("SELECT r.*, m.name, m.photo, m.username, m.division
    //                            FROM users_reviews r
    //                            INNER JOIN member m 
    //                            ON m.id = r.member_id AND member_id = '".$member_id."' ORDER BY date_review ASC");
    //     if ($Q->num_rows > 0) {
    //         $return = $Q->result();
    //     } else {
    //         $return = 0;
    //     }
    //     $Q->free_result();
    //     return $return;
    // }
	

}
?>