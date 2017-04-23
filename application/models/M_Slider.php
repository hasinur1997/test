<?php 
class M_Slider extends CI_Model
{

	public function get(){

		$query = $this->db->get('slider');

		return $query->result();
	}

	public function first($id)
	{
		$query = $this->db->get_where('slider', ['id' => $id]);

		return $query->row();
	}

	public function create($data)
	{
		$this->db->insert('slider',$data);
	}


	public function update($id, $data)
	{
		$this->db->where('id', $id);

		$this->db->update('slider', $data);
	}


	public function delete($id)
	{
		$this->db->where('id', $id);

		$this->db->delete('slider');
	}


	
}