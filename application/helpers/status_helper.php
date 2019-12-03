<?php

function status($id){
	$CI =& get_instance();
	$status = $CI->db->get_where('status',['id' => $id])->row();

	return $status->nama;
}