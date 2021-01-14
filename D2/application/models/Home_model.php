<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function get_data_user()
	{
		$query = $this->db->get('user');
		return $query;
	}

	public function input($table, $data)
	{
		$this->db->insert($table, $data);
	}

	public function delete($table, $where)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function get_one($where,$table){		
		return $this->db->get_where($table,$where);
	}

	public function update($table,$data,$where){		
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	
}
