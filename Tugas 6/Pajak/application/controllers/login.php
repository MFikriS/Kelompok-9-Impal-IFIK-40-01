<?php

class Login extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('m_login');
	}
	
	function index() {
		$this->load->view('v_login');
	}
	
	function aksi_login() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'username', 'required|trim');
		$this->form_validation->set_rules('password', 'password', 'required|trim');
		$username = $this->input->post('username', 'Username', 'required|trim');
		$password = $this->input->post('password', 'Username', 'required|trim');
		$where = array(
			'Username' => $username,
			'Password' => $password
			);
			
		$cek = $this->m_login->cek_login("dppk", $where)->num_rows();
		if($cek > 0) {
			
			$data_session = array(
				'Username' => $username,
				'status' => "login"
				);
			
			$this->session->set_userdata($data_session);
			redirect(base_url("dppk"));
		}else{
			$this->session->set_flashdata('message', 'Username atau Password salah');
			redirect(base_url('login'));
		}
		
	}
	
	function logout() {
		$this->session->sess_destroy();
		redirect(base_url("login"));
	}
}
?>