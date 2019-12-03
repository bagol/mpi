<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('role') != 'admin'){
			redirect('Login/ceksession');

		}
        $this->load->helper('bulan');
		$this->load->model('M_user');
        $this->load->model('M_cabang');
	}
    public function index(){
        $this->load->model('M_pengaduan');
        $data['cabang'] = $this->M_cabang->cabangAll()->num_rows();
        $data['title'] = 'Admin';
        $data['jml_user'] = $this->M_user->getAllUser()->num_rows();
        $data['laporan'] = $this->M_pengaduan->getAllPengaduan(['status_pengaduan' => 1])->num_rows();
        $data['perbulan'] = $this->M_pengaduan->getLogPengaduan(['status_pengaduan' => 1])->result_array();
        $this->load->view('template/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('template/footer');
        $this->load->view('admin/footer', $data);
    }

    function cabang(){
        $this->load->model('M_daerah');
        $data['provinsi'] = $this->M_daerah->provinsi()->result_array();
        $data['title'] = 'cabang';
        $data['cabang'] = $this->M_cabang->cabangAll()->result_array();
        $this->load->view('template/header', $data);
        $this->load->view('admin/cabang/cabang',$data);
        $this->load->view('template/footer');
        $this->load->view('admin/cabang/cabang_footer',$data);
    }

    function user(){
        
        $data['title'] = 'User';
        $data['users'] = $this->M_user->getAllUser()->result_array();
        
        $this->load->view('template/header', $data);
        $this->load->view('admin/user/user',$data);
        $this->load->view('template/footer');
        $this->load->view('admin/user/user_footer');
    }

    function buatUser(){
        $this->load->model('M_role');
        $this->load->model('M_daerah');
        $data['provinsi'] = $this->M_daerah->provinsi()->result_array();
        $data['cabang'] = $this->M_cabang->cabangAll()->result_array();
        $data['role'] = $this->M_role->role()->result_array();
        $data['title'] = 'buat User';
        $this->load->view('template/header', $data);
        $this->load->view('admin/user/buat_user',$data);
        $this->load->view('template/footer');
        $this->load->view('admin/user/footer');
    }

    function pengaduan(){
        $this->load->model('M_pengaduan');
        $data['title'] = 'Data Pengaduan';
        $where = ['status_pengaduan.status_pengaduan' => 1];
        $data['pengaduan'] = $this->M_pengaduan->getPengaduan(1)->result_array();
        $this->load->view('template/header', $data);
        $this->load->view('admin/pengaduan/index',$data);
        $this->load->view('template/footer');
    }

    function verifikasi(){
        $this->load->helper('provinsi');
        $this->load->model('M_pengaduan');
        $id = $this->uri->segment(3);
        $where = ['data_pelapor.id' => $id];
        $data['pengaduan'] = $this->M_pengaduan->getAllPengaduan($where)->row();
        $data['title'] = 'verifikasi';
        $data['pekerjaans'] = $this->M_pengaduan->pekerjaan()->result_array();
        $this->load->view('template/header', $data);
        $this->load->view('admin/verifikasi/index');
        $this->load->view('template/footer');
        $this->load->view('admin/verifikasi/footer',$data);
    }
}
