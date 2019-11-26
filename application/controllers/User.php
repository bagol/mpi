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
	}

	function acount(){
	    $data['title'] = 'Acount';
	    $data['user'] = $this->M_user->detailUser($this->session->userdata('nip'))->row();
	    $this->load->view('template/header',$data);
	    $this->load->view('template/acount',$data);
	    $this->load->view('template/footer');
	  }
}