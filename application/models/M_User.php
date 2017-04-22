<?php 
class M_User extends CI_Model
{
	public function get()
	{
		$query = $this->db->get('user');
		
		return $query->result();
	}
	
	public function create($data)
	{
		$this->db->insert('user', $data);
	}
}

?>