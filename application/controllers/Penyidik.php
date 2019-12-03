<?php

/**
 * 
 */
class Penyidik extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('role') != 'penyidik'){
			redirect('Login/cekssesion');
		}
		$this->load->model('M_pengaduan');
		$this->load->helper('status');
	}
	function index(){
		$data['title'] = 'penyidik';
		$this->load->view('template/header', $data);
		$this->load->view('penyidik/index');
		$this->load->view('template/footer');
	}

	function pengaduan(){
		$data['title'] = 'Pengaduan';
		$data['pengaduan'] = $data['pengaduan'] = $this->M_pengaduan->getPengaduan(3)->result_array();
		$this->load->view('template/header', $data);
		$this->load->view('penyidik/pengaduan/index',$data);
		$this->load->view('template/footer');
	}

	function prosesPriksa(){
		$data['title'] = 'Priksa Laporan';
		$this->load->model('M_status');
		$this->load->helper('provinsi');
        $id = $this->uri->segment(3);
        $where = ['data_pelapor.id' => $id];
        $data['pengaduan'] = $this->M_pengaduan->getAllPengaduan($where)->row();
        $data['pekerjaans'] = $this->M_pengaduan->pekerjaan()->result_array();
        $data['status'] = $this->M_status->status([
        				  'role' => $this->session->userdata('role'), 
        				  'id >' => $data['pengaduan']->status_pengaduan
    					  ])->result_array();
		//$data['pengaduan'] = $data['pengaduan'] = $this->M_pengaduan->getPengaduan(3)->result_array();

		$this->load->view('template/header', $data);
		$this->load->view('penyidik/pemeriksaan/index',$data);
		$this->load->view('template/footer');
		$this->load->view('penyidik/pemeriksaan/footer',$data);
	}

	function taks(){
		$data['title'] = 'dalam Proses';
		
		$data['pengaduan'] = $data['pengaduan'] = $this->M_pengaduan->taskPenyidik($this->session->userdata('nip'))->result_array();;
		$this->load->view('template/header', $data);
		$this->load->view('penyidik/taks/index',$data);
		$this->load->view('template/footer');
	}

	function priksa(){
		$data = array(
			'status_pengaduan' 	=> $this->input->post('status_pengaduan'),
			'ringkasan'			=> $this->input->post('ringkasan'),
			'tanggal'			=> date_format(date_create(),'Y-m-d H:i:s'),
			'nip'				=> $this->session->userdata('nip')
		);
		if($this->M_pengaduan->ubahStatus($this->input->post('id_pengaduan'),$data)){
			$this->M_pengaduan->logPengaduan([
				'id'	=> '',
				'id_pengaduan'	=> $this->input->post('id_pengaduan'),
				'status_pengaduan' => $this->input->post('status_pengaduan'),
				'user' => $this->session->userdata('nip'),
				'tanggal' => date_format(date_create(),'Y-m-d')
			]);
			$this->kirimEmail($this->input->post('email'),$this->input->post('nama_pelapor'), status($this->input->post('status_pengaduan')),$this->input->post('id_pengaduan'),$this->input->post('ringkasan'));
			$aksi = "Verifikasi data pengauadn - ".$this->input->post('id_pengaduan');
			$this->session->set_flashdata('msg_berhasil','status berhasil diubah');
			logUser($aksi, $this->session->userdata('nip'));
			redirect($_SERVER['HTTP_REFERER']);
		}else{
			$this->session->set_flashdata('msg_gagal','status gagal diubah');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	function kirimEmail($tujuan,$nama,$staus,$id_pengaduan,$ringkasan){
		$html = "<h2>Ombudsaman Republik Indonesia</h2>
				<p>Terimaksi anda telah melaporkan tindakan maladministrasi kepada kami, <br>
				kami telah memproses laporan anda.
				</p>
				<h3>Berikut detail Laporan anda :</h3>

				<table border='1'>
					<tr>
						<td>ID Pengaduan</td>
						<td>:</td>
						<td>".$id_pengaduan."</td>
					</tr>
					<tr>
						<td>Nama Pelapor</td>
						<td>:</td>
						<td>".$nama."</td>
					</tr>
					<tr>
						<td>Status Pengaduan</td>
						<td>:</td>
						<td>".$staus."</td>
					</tr>
					<tr>
						<td>ringkasan</td>
						<td>:</td>
						<td>".$ringkasan."</td>
					</tr>
				</table>";
		// Konfigurasi email
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'e2016141010@gmail.com',  // Email gmail
            'smtp_pass'   => 'Bagol234',  // Password gmail
            'smtp_timeout'=> '4',
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
        ];
        // Load library email dan konfigurasinya
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");

        // Email dan nama pengirim
        $this->email->from('no-reply@ombudsman.go.id', 'Ombudsman.go.id');
         // Email penerima
        $this->email->to($tujuan);
        // Subject email
        $this->email->subject('Pemberitahuan Terkait Pengaduan Kepada Ombudsman RI ');
        // Isi email
        $this->email->message($html);
        // Tampilkan pesan sukses atau error
        $this->email->send();
	}
}