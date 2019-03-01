<?php

class M_bayar extends CI_Model{
	function input_data($data){
		return $this->db->insert($data);
	}
}

?>