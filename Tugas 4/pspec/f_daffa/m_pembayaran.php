<?php

class M_pembayaran extends CI_Model {
	function cek_login($pembayaran,$where) {
		return $this->db->get_where($pembayaran,$where);
	}
}

?>