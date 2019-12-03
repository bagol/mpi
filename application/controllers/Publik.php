<?php

/**
 * 
 */
class Publik extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_pengaduan');
		$this->load->helper('status');
	}

	function index(){
		$this->load->model('M_daerah');
		$this->load->model('M_pengaduan');
		$data['kategori_pelapor'] = $this->M_pengaduan->kategori_pelapor()->result_array();
		$data['provinsi'] = $this->M_daerah->provinsi()->result_array();
		$data['pekerjaan'] = $this->M_pengaduan->pekerjaan()->result_array();
		$data['instansi'] = $this->M_pengaduan->instansi()->result_array();
		$this->load->view('publik/index',$data);
	}

	function uploadIdentitas($nama){
		$config['upload_path'] = './images/foto_identitas/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['file_name'] = $nama;
		$config['overwrite'] = true;
		$config['max_size'] = 1024;
		$this->load->library('upload',$config,'identitas');
		$this->identitas->initialize($config);
		if($this->identitas->do_upload('gambar_nik')){
			return $this->identitas->data("file_name");
		}else{
			return "user.png";
		}
	}

	function uploadUraian($nama){
		$config['upload_path'] = './images/foto_uraian/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
		$config['file_name'] = $nama;
		$config['overwrite'] = true;
		$config['max_size'] = 1024;
		$this->load->library('upload',$config,'uraian');
		$this->uraian->initialize($config);
		if($this->uraian->do_upload('uraian')){
			return $this->uraian->data("file_name");
		}else{
			return "user.png";
		}
	}

	function uploadDokumen($nama){
		$config['upload_path'] = './images/foto_dokumen/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['file_name'] = $nama;
		$config['overwrite'] = true;
		$config['max_size'] = 1024;
		$this->load->library('upload',$config,'dokumen');
		$this->dokumen->initialize($config);
		if($this->dokumen->do_upload('dokumen')){
			return $this->dokumen->data("file_name");
		}else{
			return "user.png";
		}
	}

	function buatPengaduan(){
		$privasi = '';
		if (empty($this->input->post('nama'))) {
			redirect('Publik');
		}
		if ($this->input->post('privasi') !== null) {
			$privasi = '1';
		}else{
			$privasi = '0';
		}
		$id = $this->M_pengaduan->getAllPengaduan()->row();
		$id_pelapor = (int)$id->id_pelapor + 1 ;
		$id_pengaduan = (int) $id->id += 1;
		$data_pelapor = [
			'id'				=> $id_pelapor,
			'nama'				=> $this->input->post('nama'),
			'jenis_kelamin'		=> $this->input->post('jenis_kelamin'),
			'warganegara'		=> $this->input->post('warganegara'),
			'NIK'				=> $this->input->post('nik'),
			'gambar_nik'		=> $this->uploadIdentitas($this->input->post('nik')),
			'email'				=> $this->input->post('email'),
			'no_tlpn'			=> $this->input->post('no_tlpn'),
			'status_perkawinan'	=> $this->input->post('status_perkawinan'),
			'pekerjaan'			=> $this->input->post('pekerjaan'),
			'Alamat'			=> $this->input->post('alamat'),
			'provinsi'			=> $this->input->post('provinsi'),
			'kategori_pelapor'	=> $this->input->post('kategori_pelapor')
		];

		$data_pengaduan = [
			'id'				=> $id_pengaduan,
			'id_pelapor'		=> $data_pelapor['id'],
			'kategori_instansi'	=> $this->input->post('instansi_terlapor'),
			'nama_instansi'		=> $this->input->post('nama_instansi'),
			'pernah_lapor'		=> $this->input->post('pernah_lapor'),
			'trakhir_melapor'	=> $this->input->post('trakhir_melapor'),
			'lapor_melalui'		=> $this->input->post('lapor_melalui'),
			'kepada_siapa'		=> $this->input->post('Kepada_siapa'),
			'alamat_terlapor'	=> $this->input->post('alamat_terlapor'),
			'provinsi'			=> $this->input->post('provinsi_terlapor'),
			'privasi'			=> $privasi,
			'harapan'			=> $this->input->post('harapan'),
			'uraian'			=> $this->uploadUraian(time()),
			'dokumen_bukti'		=> $this->uploadDokumen(time())
		];
		$status_pengaduan = [
			'id'				=> '',
			'id_pengaduan' 		=> $data_pengaduan['id'],
			'status_pengaduan' 	=> '1',
			'nip'				=> '123456789101112131',
			'ringkasan'			=> 'Belum Diverifikasi',
			'tanggal'			=> date_format(date_create(),'Y-m-d')
		];
		// var_dump($data_pengaduan);
		// echo "<br> <br>";
		// var_dump($data_pengaduan);

		// die;
		if ($this->M_pengaduan->tambahPelapor($data_pelapor)) {
			if($this->M_pengaduan->tambahPengaduan($data_pengaduan)){
				if($this->M_pengaduan->buatStatus($status_pengaduan)){
					$this->M_pengaduan->logPengaduan(['id' => '','id_pengaduan' => $data_pengaduan['id'], 'status_pengaduan' => '1', 'user' => 'Pelapor '.$data_pelapor['nama'], 'tanggal' => date_format(date_create(),'Y-m-d')]);
					$this->session->set_flashdata('msg_berhasil','Pengaduan Berhasil Dikirim silakan tunggu email konfirmasi ombudsman');
					redirect('Publik');
				}
			}else{
				redirect('publik','refresh');
			}
		}else{
			redirect('Publik');
		}
		
	}

	function hasilLapor(){
		$this->load->view('hasilLapor');
	}

	function tracking(){
		$data['pengaduan'] = null;
		$this->load->view('publik/tracking/index',$data);
	}

	function cariPengaduan(){
		$id = $this->input->post('no_pengaduan');
		$where = ['id_pengaduan' => intval($id)];
		$data['pengaduan'] = $this->M_pengaduan->pengaduan($where)->row();
		$this->load->view('publik/tracking/hasil',$data);
	}
}