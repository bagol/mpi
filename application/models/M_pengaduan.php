<?php

/**
 * 
 */
class M_pengaduan extends CI_Model
{
	
	function __construct()
	{
		# code...
	}

	function getAllPengaduan(){
		return $this->db->get('data_pengaduan');
	}
}