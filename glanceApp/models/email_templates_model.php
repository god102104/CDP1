<?php
class Email_templates_model extends CI_Model 
{
	private $table_name = 'email_templates';
	private $primary_key = 'ID';
	
	 public function __construct()
     {
        parent::__construct();
		$this->load->database();
     }
	
	public function add($data)
	{
            $return = $this->db->insert($this->table_name, $data);
            if ((bool) $return === TRUE) {
                return $this->db->insert_id();
            } else {
                return $return;
            }   
	}	
	
	public function update($id, $data)
	{
		$this->db->where('ID', $id);
		$return=$this->db->update($this->table_name, $data);
		return $return;
	}
	
	public function delete($id)
	{
		$this->db->where('ID', $id);
		$this->db->delete($this->table_name);
	}

	public function all_records($per_page, $page) 
	{
        $this->db->select('*');
        $this->db->from($this->table_name);
		$this->db->order_by($this->primary_key, "DESC"); 
		$this->db->limit($per_page, $page);
        $Q = $this->db->get();
        if ($Q->num_rows() > 0) {
            $return = $Q->result();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
    }
	
	
	public function get_record_by_id($id) 
	{
        $this->db->select('*');
        $this->db->from($this->table_name);
		$this->db->where($this->table_name.'.ID',$id);
        $Q = $this->db->get();
        if ($Q->num_rows() > 0) {
            $return = $Q->row();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
    }
	
	public function record_by_slug($slug) 
	{
        $this->db->select('*');
        $this->db->from($this->table_name);
		$this->db->where($this->table_name.'.slug',$slug);
        $Q = $this->db->get();
        if ($Q->num_rows() > 0) {
            $return = $Q->row();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
    }
	
	
	public function all_parent_records() 
	{
        $this->db->select('ID, title_en');
        $this->db->from($this->table_name);
		$this->db->order_by('title_en', "ASC"); 
        $Q = $this->db->get();
        if ($Q->num_rows() > 0) {
            $return = $Q->result();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
    }
	
	public function record_count($table_name) 
	{
		return $this->db->count_all($table_name);
    }
	
}
?>
