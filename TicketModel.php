<?php

class TicketModel extends CI_Model{


	public function auth_check($data)
	{


		$condition = "email =" . "'" . $data['email'] . "' AND " . "password =" . "'" . $data['password'] . "'";
		$this -> db -> select('id, name,email, password,phone');
		$this -> db -> from('user');
		$this -> db -> where($condition);
		$query = $this -> db -> get();

		if($query){
			return $query->row();
		}
		return false;
	}



	
} 
?>
