<?php
include('Admin.php');
/**
 * 
 */

class Cabang extends Admin
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_cabang');
		$this->load->helper('provinsi');
	}

	function tambah_cabang(){
		$data = array(	
			'id' 			=> '', 
			'nama'			=> $this->input->post('nama'),
			'alamat'		=> $this->input->post('alamat'),
			'provinsi'		=> $this->input->post('provinsi'),
			'kota'			=> $this->input->post('kota'),
			'no_tlpn'		=> $this->input->post('no_tlpn'),
			'email'			=> $this->input->post('email'),
			'wa'			=> $this->input->post('wa'),
			'kepala_cabang'	=> $this->input->post('kepala_cabang')
		);
		if($this->M_cabang->tambahCabang($data)){
			$this->session->set_flashdata('msg_berhasil','Data Berhasil ditambahkan');
			$aksi = "Menambahkan Cabang ".$this->input->post('nama')." - ".provinsi($this->input->post('provinsi'));
			logUser($aksi,$this->session->userdata('nip'));
			redirect('Admin/cabang');
		}else{
			$this->session->set_flashdata('msg_gagal','gagal menyimpan data');
			redirect('Admin/cabang');
		}
	}

	function ubah_cabang(){
		$id = $this->input->post('id');
		$data = array(	
			'nama'			=> $this->input->post('nama'),
			'alamat'		=> $this->input->post('alamat'),
			'no_tlpn'		=> $this->input->post('no_tlpn'),
			'email'			=> $this->input->post('email'),
			'wa'			=> $this->input->post('wa'),
			'kepala_cabang'	=> $this->input->post('kepala_cabang')
		);
		if($this->M_cabang->ubahCabang($id,$data)){
				$this->session->set_flashdata('msg_berhasil','Data Berhasil diubah');
				redirect('Admin/cabang');
			}else{
				$this->session->set_flashdata('msg_gagal','gagal mengubah data');
				redirect('Admin/cabang');
			}
		}
}