<?php

function update_session($before,$after){
	$this->session->unset_userdata($before);
	$this->session->set_userdata($after);
}