<?php
class Comments_Model extends CI_Model {
    public function __construct() {
       // parent::__construct();
	   $this->load->database();
    }
    
	public function add_comment($data){
  
            $return = $this->db->insert('users_comments', $data);
            if ((bool) $return === TRUE) {
                return $this->db->insert_id();
            } else {
                return $return;
            }       
			
	}	
	
	
	
	public function get_all_comments($member_id){
		$Q = $this->db->query("SELECT c.*, m.name, m.photo, m.username 
                               FROM users_comments c
                               INNER JOIN member m 
                               ON m.id = c.mem_id_from AND mem_id_to = '".$member_id."' ORDER BY date_comment ASC");
        if ($Q->num_rows > 0) {
            $return = $Q->result();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
	}
	
	public function add_image_comment($data){
  
            $return = $this->db->insert('image_comments', $data);
            if ((bool) $return === TRUE) {
                return $this->db->insert_id();
            } else {
                return $return;
            }       
			
	}
	
	public function get_all_image_comments($image_id){
		$Q = $this->db->query("SELECT im_c.*, m.name, m.photo, m.username 
								FROM `image_comments` im_c
								INNER JOIN member m
								ON im_c.mem_id = m.id
								WHERE im_c.img_id = '".$image_id."'");
								
        if ($Q->num_rows > 0) {
            $return = $Q->result();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
	}
	
	public function get_comment_by_id_mem_id($id,$mem_id){
        $this->db->select('*');
        $this->db->from('users_comments');
		$this->db->where('comment_id',$id);
		$this->db->where('mem_id_from',$mem_id);
        $Q = $this->db->get();
        if ($Q->num_rows() > 0) {
            $return = $Q->row();
        } else {
            $return = 0;
        }
        $Q->free_result();
		//echo $this->db->last_query(); exit;
        return $return;
    }
	
	public function get_comment_by_id($id){
		$Q = $this->db->query("SELECT * FROM users_comments WHERE comment_id = '".$id."'");
          if ($Q->num_rows > 0) {
            $return = $Q->row();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
		
	}
	
	public function delete_comment($id){
		$Q = $this->db->query("Delete FROM users_comments WHERE comment_id = '".$id."'");
        $return = 1;
        return $return;
		
	}
	
}
?>
