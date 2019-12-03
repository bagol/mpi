<?php

/**
 * 
 */
class M_daerah extends CI_Model
{
	function provinsi($id_prov = ''){
		//$this->db->where('id_prov', $provinsi);
		if($id_prov == ''){
			$this->db->group_by('nama');
			return $this->db->get('provinsi');
		}else{
			$this->db->where('id_prov', $id_prov);
			return $this->db->get('provinsi');
		}
		
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