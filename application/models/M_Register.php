<?php

class M_Register extends CI_model{
	public function ambildata(){
		return $this ->db-> get('login');
		
	}
		public function input($table){
		$this->db->insert('login',$table);
	}



	
}

?>