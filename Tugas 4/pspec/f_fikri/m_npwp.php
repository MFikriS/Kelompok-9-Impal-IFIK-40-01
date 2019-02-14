<?php

class M_npwp extends CI_Model { 
    function get_npwp() {
		$hasil = $this->db->query("SELECT NPWP FROM wajib_pajak");
		return $hasil;
    }
}