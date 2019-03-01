<!DOCTYPE html>
<html>
<html>
	<head>
		<title>Buat SPPT</title>
		<meta charset="utf-8">
		<link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet" type="text/css">
	</head>
	<h2> Hai, <?php echo $this->session->userdata("Username"); ?></h2>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo base_url().'dppk'?>">PERPAJAKAN</a>
			</div>
			<ul class="nav navbar-nav navbar-right"><br/>
			<li><a href="<?php echo base_url().'dppk'?>">Home</a></li>
			<li><a href="<?php echo base_url().'info'?>">Info Perpajakan</a></li>
			<li><a href="<?php echo base_url().'validasi'?>">Validasi Pembayaran</a></li>
			<li><a href="<?php echo base_url().'buat_sppt'?>">SPPT</a></li>
			<li><a href="<?php echo base_url().'objek'?>">Objek Pajak</a></li>
			<li><a href="<?php echo base_url().('login/logout');?>" button class="btn btn-kecil btn-default" type="cancel">Logout</button></li></a>
			</ul>
		</div>
	</nav>
	<br/>
	<form class="form-signin" action="<?php echo base_url('proses_buat_sppt/aksi_buat'); ?>" method="post">
		<h2 class="text-center">List SPPT</h2><br/><br/>
		<center><?php echo anchor('buat_sppt/tambah','Tambah Data'); ?></center>
		<center><?php echo $this->session->flashdata('message');?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>NO</th>
			<th>No SPPT</th>
			<th>NOP</th>
			<th>ID Pegawai</th>
			<th>Tahun</th>
			<th>Tanggal Jatuh Tempo</th>
			<th>Denda</th>
			<th>Total Tagihan</th>
			<th>Tempat Pembayaran</th>
			<th>Aksi</th>
		</tr>
		<?php 
		$no = 1;
		foreach($sppt as $s){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $s->No_SPPT ?></td>
			<td><?php echo $s->NOP ?></td>
			<td><?php echo $s->ID_Pegawai ?></td>
			<td><?php echo $s->Tahun ?></td>
			<td><?php echo $s->Tgl_Jatuh_Tempo ?></td>
			<td><?php echo $s->Denda ?></td>
			<td><?php echo $s->Total_Tagihan ?></td>
			<td><?php echo $s->Tempat_Pembayaran ?></td>
			<td>
			      <?php echo anchor('buat_sppt/edit'.$s->No_SPPT,'Edit'); ?>
                              <?php echo anchor('buat_sppt/hapus'.$s->No_SPPT,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
	</form>
	</br></br>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
</body>
</html>