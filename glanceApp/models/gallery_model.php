<?php
class Gallery_Model extends CI_Model {
    public function __construct() {
       // parent::__construct();
	   $this->load->database();
    }
    
	public function add_gallery($data){
  
            $return = $this->db->insert('members_gallery', $data);
            if ((bool) $return === TRUE) {
                return $this->db->insert_id();
            } else {
                return $return;
            }       
			
	}	
	
	
	
	public function get_all_gallery_by_id($member_id, $album_id){
		
		if($album_id == '') {
			$album_id = 0;
		}
		
		$Q = $this->db->query("SELECT image_id, org_photo FROM members_gallery WHERE mem_id = '".$member_id."' AND album_id = '".$album_id."' ORDER BY date_added ASC");
        if ($Q->num_rows > 0) {
            $return = $Q->result();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
	}
	
	public function checkAlbumname($member_id,$album_name) {
		
		$Q = $this->db->query("SELECT * FROM members_albums WHERE mem_id = '".$member_id."' AND album_name = '".$album_name."'");
        if ($Q->num_rows > 0) {
            $return = 1;
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
		
	}
	
	public function add_album($data){
  			
            $return = $this->db->insert('members_albums', $data);
            if ((bool) $return === TRUE) {
                return $this->db->insert_id();
            } else {
                return $return;
            }       
			
	}
	
	public function get_album_id_by_albumname($member_id,$album_name) {
		
		$Q = $this->db->query("SELECT album_id FROM members_albums WHERE mem_id = '".$member_id."' AND album_name = '".$album_name."'");
        if ($Q->num_rows > 0) {
            $return = $Q->row();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
		
	}
	
	public function get_all_album_names_by_member_id($member_id) {
		
		
		/*$Q = $this->db->query("SELECT * FROM `members_albums` where mem_id = '".$member_id."' ORDER BY album_name ASC");*/
		$Q = $this->db->query("SELECT count(org_photo) as total, album_name
								FROM `members_albums` ma 
								LEFT JOIN members_gallery mg 
								ON ma.album_id = mg.album_id 
								where ma.mem_id = '".$member_id."'
								GROUP BY ma.album_id
								ORDER BY ma.album_name ASC");
        if ($Q->num_rows > 0) {
            $return = $Q->result();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
	}
	
	public function get_single_image_by_id($image_id){

		$Q = $this->db->query("SELECT image_id, org_photo, mem_id, album_id FROM members_gallery WHERE image_id = '".$image_id."'");
        if ($Q->num_rows > 0) {
            $return = $Q->row();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
	}
	
	public function get_album_albumname_by_id($member_id,$album_id) {
		
		$Q = $this->db->query("SELECT album_name FROM members_albums WHERE mem_id = '".$member_id."' AND album_id = '".$album_id."'");
        if ($Q->num_rows > 0) {
            $return = $Q->row();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
		
	}
	
	public function delete_image($id){
		$Q = $this->db->query("Delete FROM members_gallery WHERE image_id = '".$id."'");
        $return = 1;
        return $return;
		
	}
}
?>
