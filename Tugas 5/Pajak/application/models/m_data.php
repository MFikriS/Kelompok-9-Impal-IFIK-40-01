<?php

class M_data extends CI_Model{
	function ambil_data(){
		return $this->db->get('dppk');
	}
}

?>