<?php

function provinsi($data){
	$CI =& get_instance();
	$prov = $CI->db->get_where('provinsi',['id_prov' => $data])->row();

	echo $prov->nama;
}