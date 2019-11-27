<?php

/**
 * 
 */
class User extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');

		if($this->session->userdata('role') == null){
			redirect('Login');
		}
		$this->load->model('M_user');
	}

	function acount(){
	    $data['title'] = 'Acount';
	    $data['user'] = $this->M_user->detailUser($this->session->userdata('nip'))->row();
	    $this->load->view('template/header',$data);
	    $this->load->view('template/acount',$data);
	    $this->load->view('template/footer');
	    $this->load->view('user/footer');
	 }

	 function ceksesion(){
	 	var_dump($this->session->userdata());
	 }

	function generatePassword(){
		$pass = $this->uri->segment(3);

		echo password_hash($pass,PASSWORD_DEFAULT,['const' => 12]);
	}

	function tambahUser(){
		// data user
		$user = array(
			'foto' => $this->uploadFoto(),
			'nip' => $this->input->post('nip'), 
			'username' => $this->input->post('nama'),
			'password' => password_hash($this->input->post('nama').'123',PASSWORD_DEFAULT,['const' => 12]),
			'role' => $this->input->post('role'),
			'email' => $this->input->post('email'),
			'no_tlpn' => $this->input->post('no_tlpn'),
			'id_cabang' => $this->input->post('kantor'),
		);
		// detail data user
		$detail = array(
			'id' => '',
			'nip' => $this->input->post('nip'),
			'nama_lengkap' => $this->input->post('nama_lengkap'), 
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'tgl_lahir' => $this->input->post('tgl_lahir'), 
			'tempat_lahir' => $this->input->post('tempat_lahir'), 
			'provinsi' => $this->input->post('provinsi'),
			'kota' => $this->input->post('kota'), 
			'alamat' => $this->input->post('alamat'),
			'agama' => $this->input->post('agama'),
			'status_perkawinan' => $this->input->post('status_perkawinan')     
		);

		// input data user dengan memanggil model m_user
		if($this->M_user->insert($user)){
			if($this->M_user->insertDetail($detail)){
				$this->session->set_flashdata('msg_berhasil','Data berhasil disimpan');
				redirect('Admin/user');
			}else{
				$this->session->set_flashdata('msg_berhasil','Data berhasil disimpan');
				redirect('Admin/buatUser');
			}
		}else{
			$this->session->set_flashdata('msg_berhasil','Data berhasil disimpan');
				redirect('Admin/user');
		}
	}

	function uploadFoto(){
		$config['upload_path'] = './images/foto_profile/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['file_name'] = time();
		$config['overwrite'] = true;
		$config['max_size'] = 1024;
		$this->load->library('upload',$config);

		if($this->upload->do_upload('foto')){
			return $this->upload->data("file_name");
		}else{
			return "user.png";
		}
	}
	function update_session($before,$after){
		$this->session->unset_userdata($before);
		$this->session->set_userdata($after);
	}

	function ubahFoto(){
		$nip = $this->session->userdata('nip');
		$data = array('foto' => $this->uploadFoto()
				);
		if($this->M_user->ubahFoto($nip,$data)){
			$before = array('foto');
			$this->update_session($before, $data);
			$this->session->flashdata('msg_berhasil','foto berhasil diubah');
			redirect('User/acount');
		}else{
			$this->session->flashdata('msg_berhasil','foto berhasil diubah');
			redirect('User/acount');
		}
	}

}