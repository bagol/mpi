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
	}
	function index(){
		$data['title'] = 'penyidik';
		$this->load->view('template/header', $data);
		$this->load->view('penyidik/index');
		$this->load->view('template/footer');
	}
}