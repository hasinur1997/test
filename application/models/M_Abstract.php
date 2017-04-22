<?php 
	class M_Abstract extends CI_Model{

		public function get()
		{
		  $query = $this->db->get('abstract');

		  return $query->result();

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

		}
	}

?>