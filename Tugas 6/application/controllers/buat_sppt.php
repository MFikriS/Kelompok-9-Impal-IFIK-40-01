<?php

class Buat_sppt extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('m_dppk_bSPPT');
		$this->load->helper('url');
	}
	
	public function index() {
		$data['sppt'] = $this->m_dppk_bSPPT->tampil_data()->result();
		$this->load->view('dppk/v_tampil_sppt',$data);
	}
	
	function tambah(){
		$this->load->view('dppk/v_buat_sppt');
	}
	
	function tambah_aksi(){
		$n_sppt = $this->input->post('nosppt');
		$nop = $this->input->post('nop');
		$id_peg = $this->input->post('idpegawai');
		$thn = $this->input->post('tahun');
		$tgl_jth_tmp = $this->input->post('tanggaljatuhtempo');
		$dnd = $this->input->post('denda');
		$ttl_tghn = $this->input->post('totaltagihan');
		$tmpt_byr = $this->input->post('tempatbayar');
 
		$data = array(
			'No_SPPT' => $n_sppt,
			'NOP' => $nop,
			'ID_Pegawai' => $id_peg,
			'Tahun' => $thn,
			'Tgl_Jatuh_Tempo' => $tgl_jth_tmp,
			'Denda' => $dnd,
			'Total_Tagihan' => $ttl_tghn,
			'Tempat_Pembayaran' => $tmpt_byr
			);
		$this->m_dppk_bSPPT->input_data($data,'sppt');
		$this->session->set_flashdata('message', 'Sukses Tambah Data');
		redirect('buat_sppt');
	}
	
	function hapus($No_SPPT){
		$where = array('No_SPPT' => $No_SPPT);
		$this->m_dppk_bSPPT->hapus_data($where,'sppt');
		redirect('buat_sppt');
	}
}
?>