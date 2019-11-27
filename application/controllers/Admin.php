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
        $data['laporan'] = $this->M_pengaduan->getAllPengaduan()->num_rows();
        $data['perbulan'] = $this->M_pengaduan->pengaduan_masuk()->result_array();
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
}
