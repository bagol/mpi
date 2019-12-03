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

	function getAllPengaduan($where = []){
		if ($where != []) {
			$this->db->where($where);
			$this->db->select('data_pengaduan.id as id_pengaduan');
			$this->db->select('kategori_instansi.nama as instansi_kategori');
			$this->db->select('data_pelapor.provinsi as provinsi_pelapor');
			$this->db->select('data_pengaduan.provinsi as provinsi_terlapor');
			$this->db->select('kategori_pelapor.nama as pelapor_kategori');
			$this->db->select('status_pengaduan.*');
			$this->db->select('data_pelapor.*');
			$this->db->select('data_pengaduan.*');
			$this->db->from('data_pelapor');
			$this->db->join('data_pengaduan', 'data_pelapor.id = data_pengaduan.id_pelapor', 'inner');
			$this->db->join('status_pengaduan', 'data_pengaduan.id = status_pengaduan.id_pengaduan', 'inner');
			$this->db->join('kategori_pelapor', 'data_pelapor.kategori_pelapor = kategori_pelapor.id', 'inner');
			$this->db->join('kategori_instansi', 'data_pengaduan.kategori_instansi = kategori_instansi.id', 'inner');
			return $this->db->get();
		}
		return $this->db->query('select * from data_pengaduan order by id desc');

	}

	function getPengaduan($where){
		$this->db->from('data_pengaduan');
		$this->db->join('status_pengaduan', 'status_pengaduan.id_pengaduan = data_pengaduan.id', 'inner');
		$this->db->join('data_pelapor', 'data_pelapor.id = data_pengaduan.id_pelapor', 'inner');
		$this->db->where('status_pengaduan', $where);
		return $this->db->get();
	}

	function pengaduan($where){
		$this->db->join('data_pengaduan', 'data_pengaduan.id = status_pengaduan.id_pengaduan', 'inner');
		return $this->db->get_where('status_pengaduan',$where);
	}

	function pengaduan_masuk(){
		return $this->db->query('SELECT MONTH(b.tanggal) as tanggal, COUNT(*) as jumlah FROM `data_pengaduan` a INNER JOIN status_pengaduan b on a.id=b.id_pengaduan GROUP BY tanggal  ');
	}
	function instansi(){
		return $this->db->get('kategori_instansi');
	}

	function pekerjaan(){
		return $this->db->get('pekerjaan');
	}
	function kategori_pelapor(){
		return $this->db->get('kategori_pelapor');
	}

	function tambahPelapor($data){
		return $this->db->insert('data_pelapor', $data);
	}

	function tambahPengaduan($data){
		return $this->db->insert('data_pengaduan', $data);
	}
	function buatStatus($data){
		return $this->db->insert('status_pengaduan', $data);
	}
	function ubahStatus($id,$data){
		$this->db->where('id_pengaduan', $id);
		return $this->db->update('status_pengaduan', $data);
	}

	function logPengaduan($data){
		return $this->db->insert('log_pengaduan', $data);
	}
	function getLogPengaduan($where){
		$this->db->select('MONTH(tanggal) as tanggal ');
		$this->db->select('count(*) as jumlah');
		return $this->db->get_where('log_pengaduan',$where);
	}

	function taskPenyidik($where){
		return $this->db->query("select * from status_pengaduan a inner join user b on a.nip=b.nip inner join data_pengaduan c on a.id_pengaduan=c.id join data_pelapor d on c.id_pelapor=d.id where a.status_pengaduan >= 4 and a.status_pengaduan <= 13 and a.nip=$where");
	}
}