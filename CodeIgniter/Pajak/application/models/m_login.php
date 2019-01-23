<?php

class M_login extends CI_Model {
	function cek_login($dppk,$where) {
		return $this->db->get_where($dppk,$where);
	}
}

?>