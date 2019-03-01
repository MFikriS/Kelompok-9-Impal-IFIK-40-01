<?php

class M_input_objekpajak extends CI_Model {
	function cek_data_op($objek_pajak,$whereBINARY) {
		return $this->db->get_where($objek_pajak,$whereBINARY);
	
	function addData(){
		$v_date = date('Y-m-d');
		$v_time = date('H:i:s');
		$data = array(
			'NOP' => $_POST['nop'],
			'Jenis_Penggunaan_Bangunan' => $_POST['jenis'],
			'Letak_Objek_Pajak' => $_POST['letak'],
			'Objek_Pajak' => $_POST['jenis'],
			'Nilai_Jual' => $_POST['nop'],
			'Luas_Bangunan' => $_POST['jenis'],
			'Luas_Tanah' => $_POST['luas_bangunan'],
			'Nilai_Jual' => $_POST['luas_tanah'],
			'Kelas' => $_POST['kelas'],
			'NJOP_Per_M2' => $_POST['njop'],
			'Total_NJOP' => $_POST['totalnjop'],
			'NJOPTKP' => $_POST['njoptkp'],
			'NJKP' => $_POST['njkp'],
			'PBB_Terhutang' => $_POST['pbbterhutang'],
			'NPWP' => $_POST['jenis'],
			'ID_Pegawai' => $_POST['idpegawai'],
			'Tanggal_Input' => $v_date,
			'Jam_Input' => $vdate
    );
    $this->db->insert('objek_pajak', $data);
	}
}

?>