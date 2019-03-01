<?php

class M_login extends CI_Model {
	function cek_login($dppk,$whereBINARY) {
		return $this->db->get_where($dppk,$whereBINARY);
	}
}

?>