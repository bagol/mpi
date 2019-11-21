<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('role') != 'admin'){
			redirect('Login/verifikasi');
		}
		$this->load->model('M_user');
	}
    public function index()
    {
       $data['title'] = 'Admin';
       $data['jml_user'] = $this->M_user->getAllUser()->num_rows();
       $this->load->view('template/header', $data);
       $this->load->view('admin/index', $data);
       $this->load->view('template/footer');
    }
}
