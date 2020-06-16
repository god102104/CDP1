<?php
class Ads_Model extends CI_Model {
    public function __construct() {
	   $this->load->database();
    }
    	
	public function get_content() {
		$Q = $this->db->query("SELECT * FROM ads where ID = '1'");
        if ($Q->num_rows > 0) {
            $return = $Q->row();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
		
	}

	public function update_records($data){
		$this->db->where('ID', 1);
		$return=$this->db->update('ads', $data);
		return $return;
	}
	
}
?>
