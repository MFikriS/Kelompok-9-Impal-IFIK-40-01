<?php

class M_npwp extends CI_Model { 
    function get_npwp() {
		$hasil = $this->db->query("SELECT NPWP FROM objek_pajak;");
		return $hasil;
    }
}