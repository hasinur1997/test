<?php 
	class M_Abstract extends CI_Model{

		public function all()
		{
			$query =  $this->db->get('abstract');

			return $query->result();
		}

		public function get()
		{
		  $query = $this->db->get('abstract', 1);

		  return $query->row();

		}


		public function show($id)
		{
			$query =  $this->db->get_where('abstract', ['id' => $id]);

			return $query->row();
		}

		public function create($data)
		{
			$this->db->insert('abstract', $data);
		}

		public function update($id, $data)
		{
			$this->db->where('id', $id);

			$this->db->update('abstract', $data);
		}

		public function delete($id)
		{
			$this->db->where('id', $id);

			$this->db->delete('abstract');
		}
	}

?>