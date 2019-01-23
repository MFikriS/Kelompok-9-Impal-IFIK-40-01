<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_NOP extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_searchNOP');
	}
	
	function sppt() {
		$nop = $this->input->post('nop');
		$where = array(
			'NOP' => $nop
			);
		$cek = $this->m_searchNOP->cek_sppt("sppt", $where)->num_rows();
		if($cek > 0) {
			$data['sppt'] = $this->m_searchNOP->cek_sppt("sppt", $where)->result();
			$this->load->view('v_sppt.php', $data);
		}
	}
}
?>