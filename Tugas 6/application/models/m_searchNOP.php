<?php

class M_searchNOP extends CI_Model {
	
	function cek_sppt($sppt,$where) {
		return $this->db->get_where($sppt,$where);
	}
	
}

?>