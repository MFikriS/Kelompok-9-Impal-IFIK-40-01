<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_dppk_bSPPT extends CI_Model{
    private $table = 'sppt';
	
	public function tampil_data(){
		return $this->db->get('sppt');
	}
	
	public function input_data($data,$table){
		$this->db->insert($table,$data);
	}

    public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}