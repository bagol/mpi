<?php

class M_user extends CI_Model
{
    public function getUser($nip)
    {
    	$sql = "select a.foto as foto, a.nip as nip, a.username as username, a.email as email, c.nama as role,c.penempatan as penempatan,b.nama as kantor, a.password as password from user a join cabang b on a.id_cabang=b.id join role c on a.role=c.id where a.nip =".$this->db->escape($nip).";";
        return $this->db->query($sql);
    }

    public function getAllUser(){
    	$sql = "select a.nip as nip, a.username as username, a.email as email, c.nama as role,c.penempatan as penempatan,b.nama as kantor, a.password as password from user a left join cabang b on a.id_cabang=b.id left join role c on a.role=c.id";
    	return $this->db->query($sql);
    }

    function detailUser($nip){
    	$sql = "select * from user_detail where nip=".$this->db->escape($nip);
    	return $this->db->query($sql);
    }

    function insert($user){
        return $this->db->insert('user',$user);
    }

    function insertDetail($detail){
        return $this->db->insert('detail_user',$detail);
    }

    function ubahFoto($nip,$data){
        $this->db->where('nip', $nip);
        return $this->db->update('user',$data);
    }
}
