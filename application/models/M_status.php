<?php

/**
 * 
 */
class M_status extends CI_Model
{
	
	function status($role){
		return $this->db->get_where('status', $role);
	}
}