<?php
function logUser($aksi,$user){
	$data = [
		'id_log' 		=> '',
		'id_user' 	=> $user,
		'aksi'		=> $aksi,
		'time'		=> date_format(date_create(),'Y-m-d H:i:s')
	];
	$CI =& get_instance();
	$CI->db->insert('log', $data);
}