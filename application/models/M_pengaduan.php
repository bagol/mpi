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

	function pengaduan_masuk(){
		return $this->db->query('SELECT MONTH(b.tanggal) as tanggal, COUNT(*) as jumlah FROM `data_pengaduan` a INNER JOIN status_pengaduan b on a.id=b.id_pengaduan WHERE b.status_pengaduan= 1 ');
	}
}