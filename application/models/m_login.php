<?php 
 
class M_login extends CI_Model{	
	function cek_login($uji,$where){		
		return $this->db->get_where($uji,$where);
	}	
}