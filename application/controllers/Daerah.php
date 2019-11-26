<?php

/**
 * 
 */
class Daerah extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_daerah');
	}

	function provinsi(){
		$data['provinsi'] = $this->M_daerah->provinsi()->result_array();

		echo json_encode($data);

	}
	function kabupaten(){
		$kab = $this->uri->segment(3);
		$data['kabupaten'] = $this->M_daerah->kabupaten($kab)->result_array();

		echo json_encode($data);

	}
}