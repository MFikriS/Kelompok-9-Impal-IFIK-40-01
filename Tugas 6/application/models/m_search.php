<?php

class M_search extends CI_Model {
	
	function cek_pembayaran($pembayaran,$where) {
		return $this->db->get_where($pembayaran,$where);
	}
	
}

?>