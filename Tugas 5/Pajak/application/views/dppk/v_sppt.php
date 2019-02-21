<!DOCTYPE html>
<html>
	<head>
		<title>Validasi Pembayaran</title>
		<meta charset="utf-8">
		<link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet" type="text/css">
		<h2> Hai, <?php echo $this->session->userdata("Username"); ?></h2>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo base_url().'beranda'?>">PERPAJAKAN</a>
			</div>
			<ul class="nav navbar-nav navbar-right"><br/>
			<li><a href="<?php echo base_url().'beranda'?>">Home</a></li>
			<li><a href="<?php echo base_url().'info'?>">Info Perpajakan</a></li>
			<li><a href="<?php echo base_url().'buat_sppt'?>">SPPT</a></li>
			<li><a href="<?php echo base_url().'objek'?>">Objek Pajak</a></li>
			<li><a href="<?php echo base_url().('login/logout');?>" button class="btn btn-kecil btn-default" type="cancel">Logout</button></li></a>
			</ul>
		</div>
	</nav>
	<div class="container">
		<form class="form-horizontal" action="<?php echo base_url('search/sppt'); ?>" method="post">
				<br/><br/><h2>Silakan masukkan NOP Anda di bawah ini</h2><br/><br/>
				<div class="col-md-1">
					<label for="username">NOP</label>
				</div>
				<div class="col-md-4">
					<input type="number" id="nop" name="nop" class="form-control" placeholder="Masukkan NOP disini (hanya angka dan 18 digit)" required autofocus><br/>
				</div><br/><br/>
				<div class="button">
					<div class="col-md-4">
					<button class="btn btn-md btn-default" type="search">Search</button>
				</div>
				</br></br></br></br>
			</form>
				<table border="2">
				<tr>
				<th class="text-center">ID_Bayar</th>
				<th class="text-center">No_SPPT</th>
				<th class="text-center">NOP</th>
				<th>Tahun</th>
				<th>Tanggal Jatuh Tempo</th>
				<th>Denda</th>
				<th>Total Tagihan</th>
				<th>Tempat Pembayaran</th>
				<th class="text-center">Opsi</th>
		</tr>
		<?php foreach($sppt as $s) { ?>
		<tr>
			<td><?php echo $s->ID_Bayar ?></td>
			<td><?php echo $s->No_SPPT ?></td>
			<td><?php echo $s->NOP ?></td>
			<td><?php echo $s->ID_Pegawai?></td>
			<td><?php echo $s->Tahun ?></td>
			<td><?php echo $s->Tgl_Jatuh_Tempo ?></td>
			<td><?php echo $s->Denda ?></td>
			<td><?php echo $s->Total_Tagihan ?></td>
			<td><?php echo $s->Tempat_Pembayaran ?></td>
			<td>
				<a href="<?php echo base_url().'dppk'?>" button class="btn btn-sm btn-primary" type="valid">Valid</button></li></a>
				<a href="<?php echo base_url().'dppk'?>" button class="btn btn-sm btn-primary" type="valid">Tidak Valid</button></li></a>
			</td>
		</tr>
		<?php } ?>
			</table>
		</form>
		<div class="col-md-4 col-md-offset-4">
		<div class="container">
		<div class="col-md-12">
		</div>
	</div>
	<br/><br/><br/><br/><br/>
			
		</div>
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
</body>
</html>