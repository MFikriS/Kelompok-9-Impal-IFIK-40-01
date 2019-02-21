<?php

class Proses_input_objekpajak extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('m_input_objekpajak');
	}
	
	public function aksi_buat(){
		$this->m_input_objekpajak->addData();
		$this->load->view('dppk/v_buat_objek_pajak');
	}
}
?>