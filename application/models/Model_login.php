<?php 

class Model_login extends CI_Model{	
	function cek_login($table,$where)
	{		
		return $this->db->get_where($table,$where);
	}
	function ambil($table,$where)
	{
		return $this->db->get_where($table,$where);
	}

	function insert_data($table, $data)
	{
		$this->db->insert($table, $data);
	}
	
}