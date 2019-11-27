<?php


class M_role extends CI_Model{
	function role(){
		return $this->db->get('role');
	}
}