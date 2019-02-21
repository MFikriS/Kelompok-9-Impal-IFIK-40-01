<?php

class Objek extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('m_npwp');
	}

	function index() {
		$npwp=$this->input->post('npwp');
		$data=$this->m_npwp->get_npwp();
		$this->load->view('dppk/v_buat_objek_pajak',$data);
	}
}