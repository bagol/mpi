<?php

/**
 * 
 */
class M_daerah extends CI_Model
{
	function provinsi(){
		//$this->db->where('id_prov', $provinsi);
		return $this->db->get('provinsi');
	}

	function kabupaten($prov){
		$this->db->where('id_prov', $prov);
		return $this->db->get('kabupaten');
	}

	function kecamatan($kecamatan){
		$this->db->where('id_kec', $kecamatan);
		return $this->db->get('kecamatan');
	}

	function kelurahan($kelurahan){
		$this->db->where('id_kel', $kelurahan);
		return $this->db->get('kelurahan');
	}
}