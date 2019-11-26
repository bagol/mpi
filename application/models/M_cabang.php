<?php

/**
 * 
 */
class M_cabang extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 
    
	function cabangAll()
	{
		return $this->db->get('semua_cabang');
	}

	function tambahCabang($data){
		return $this->db->insert('cabang',$data);
	}
	
	function ubahCabang($id,$data){
		$this->db->where('id', $id);
		return $this->db->update('cabang', $data);
	}
}