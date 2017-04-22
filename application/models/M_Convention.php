<?php 
class M_Convention extends CI_Model
{
	public function get()
	{
		$query = $this->db->get('convention');
		
		return $query->result();
	}
	
	public function create($data)
	{
		$this->db->insert('convention', $data);
	}


	public function show($id)
	{
		$query = $this->db->get_where('convention', ['id' => $id]);

		return $query->row();
	}

	public function update($id, $data)
	{
		$this->db->where('id', $id);

		$this->db->update('convention', $data);
	}
}

?>