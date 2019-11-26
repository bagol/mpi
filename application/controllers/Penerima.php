<?php

/**
 * 
 */
class Penerima extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('role') != 'penerima'){
			redirect('Login/cekssesion');
		}
	}

	function index(){
		$data['title'] = 'penerima';
		$this->load->view('template/header', $data);
		$this->load->view('penerima/index');
		$this->load->view('template/footer');
	}
}