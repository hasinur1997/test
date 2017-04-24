 <?php

 class M_Admin extends CI_Model{

 	public function get_user($username, $password)
 	{
 		 $this->db->get_where('admin', ['user_name' => $username, 'password' => $password]);

 		 if($this->db->affected_rows()){

 		 	return true;
 		 }

 		 return false;
 	}

 	public function user_data($username, $password){
 		
 		$query = $this->db->get_where('admin', ['user_name' => $username, 'password' => $password]);

 		return $query->row();


 	}

 }

 ?>