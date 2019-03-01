<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bayar extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_bayar');
		$this->load->helper->('url');
	}

	function inputpembayaran() {
		$tanggal = date('Y-m-d');
		$data = array(
			'Tgl_Bayar' => $tanggal
		);
		$this->m_bayar->input_data($data);
		$this->load->view('v_beranda.php');
	}
	
}
?>