<?php

class M_siswa extends CI_model{
	public function ambildata(){
		return $this ->db-> get('siswa');
		
	}
		public function input($table){
		$this->db->insert('siswa',$table);
	}

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);

	}
	public function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}
		public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}


	
}

?>