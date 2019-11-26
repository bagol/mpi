<?php

/**
 * 
 */
class Resolusi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('role') != 'resolusi'){
			redirect('Login/cekssesion');
		}
	}
	function index(){
		$data['title'] = 'resolusi';
		$this->load->view('template/header', $data);
		$this->load->view('resolusi/index');
		$this->load->view('template/footer');
	}
}