<?php
include('Admin.php');
/**
 * 
 */

class Pengaduan extends Admin
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_pengaduan');
		$this->load->helper('status');
	}

	function ubahStatus(){
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
			$this->kirimEmail($this->input->post('email'), status($this->input->post('status_pengaduan')) , $this->input->post('id_pengaduan'),$this->input->post('ringkasan'));
			$aksi = "Verifikasi data pengauadn - ".$this->input->post('id_pengaduan');
			$this->session->flashdata('msg_berhasil','status berhasil diubah');
			logUser($aksi, $this->session->userdata('nip'));
			redirect('Admin/pengaduan');
		}else{
			$this->session->flashdata('msg_gagal','status gagal diubah');
			redirect('Admin/pengaduan');
		}
	}

	function test(){
		$html = "<h2>Ombudsaman Republik Indonesia</h2>
				<p>Terimaksi anda telah melaporkan tindakan maladministrasi kepada kami <br>
				kami telah memproses laporan anda.
				</p>
				<h3>Berikut detail Laporan anda :</h3>

				<table>
					<tr>
						<td>ID Pengaduan</td>
						<td>:</td>
						<td>1233421313</td>
					</tr>
					<tr>
						<td>Nama Pelapor</td>
						<td>:</td>
						<td>nama</td>
					</tr>
					<tr>
						<td>Status Pengaduan</td>
						<td>:</td>
						<td>Coba Doang</td>
					</tr>
					<tr>
						<td>ringkasan</td>
						<td>:</td>
						<td>Semoga Berhasil</td>
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
        $this->email->to('jailbagol@gmail.com');
        // Subject email
        $this->email->subject('Pemberitahuan Terkait Pengaduan Kepada Ombudsman RI ');
        // Isi email
        $this->email->message($html);
        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            echo 'Sukses! email berhasil dikirim.';
        } else {
            echo 'Error! email tidak dapat dikirim.';
            show_error($this->email->print_debugger());
        }
	}

	function kirimEmail($tujuan,$staus,$id_pengaduan,$ringkasan){
		$html = "<h2>Ombudsaman Republik Indonesia</h2>
				<p>Terimaksi anda telah melaporkan tindakan maladministrasi kepada kami <br>
				kami telah memproses laporan anda.
				</p>
				<h3>Berikut detail Laporan and</h3>

				<table border='1'>
					<tr>
						<td>ID Pengaduan</td>
						<td>:</td>
						<td>".$id_pengaduan."</td>
					</tr>
					<tr>
						<td>Nama Pelapor</td>
						<td>:</td>
						<td>nama</td>
					</tr>
					<tr>
						<td>Status Pengaduan</td>
						<td>:</td>
						<td>".$status."</td>
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