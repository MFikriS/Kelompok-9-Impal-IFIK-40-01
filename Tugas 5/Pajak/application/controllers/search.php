<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_search');
	}
	
	function pembayaran() {
		$nop = $this->input->post('nop');
		$where = array(
			'NOP' => $nop
			);
		$cek = $this->m_search->cek_pembayaran("pembayaran", $where)->num_rows();
		if($cek > 0) {
			$data['sppt'] = $this->m_search->cek_pembayaran("pembayaran", $where)->result();
			$this->load->view('dppk/v_sppt', $data);
		} else {
			$this->session->set_flashdata('message', 'NOP yang Anda masukkan tidak valid');
			redirect(base_url('cari_nop_dppk'));
		}
	}
}
?>