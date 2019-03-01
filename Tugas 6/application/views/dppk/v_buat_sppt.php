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
	<form class="form-signin" action="<?php echo base_url('buat_sppt/tambah_aksi'); ?>" method="post">
		<h2 class="text-center">Form Buat SPPT</h2><br/><br/>
				<div class="col-md-2">
					<label for="username">Nomor SPPT</label>
				</div>
				<div class="col-md-4">
					<input type="text" id="nosppt" name="nosppt" class="form-control" placeholder="Masukkan Nomor SPPT disini" required autofocus><br/>
				</div></br></br></br>
				<div class="col-md-2">
					<label for="username">NOP(Nomor Wajib Pajak)</label>
				</div>
				<div class="col-md-4">
					<input type="number" onKeyPress="if(this.value.length==18) return false", id="nop" name="nop" class="form-control" placeholder="Masukkan NOP disini (hanya angka dan 18 digit)" required autofocus><br/>
				</div><br/><br/></br>
				<div class="col-md-2">
					<label for="username">ID Pegawai</label>
				</div>
				<div class="col-md-4">
					<input type="number" id="idpegawai" name="idpegawai" class="form-control" placeholder="Masukkan ID Pegawai disini" required autofocus><br/>
				</div></br></br></br>
				<div class="col-md-2">
					<label for="username">Tahun</label>
				</div>
				<div class="col-md-4">
					<input type="text" id="tahun" name="tahun" class="form-control" placeholder="Masukkan tahun disini (YYYY)" required autofocus><br/>
				</div></br></br></br>
				<div class="col-md-2">
					<label for="username">Tanggal Jatuh Tempo</label>
				</div>
				<div class="col-md-4">
					<input type="text" id="tanggaljatuhtempo" name="tanggaljatuhtempo" class="form-control" placeholder="Masukkan tanggal jatuh tempo disini (YYYY-MM-DD)" required autofocus><br/>
				</div></br></br></br>
				<div class="col-md-2">
					<label for="username">Denda</label>
				</div>
				<div class="col-md-4">
					<input type="text" id="denda" name="denda" class="form-control" placeholder="Masukkan denda disini" required autofocus><br/>
				</div></br></br></br>
				<div class="col-md-2">
					<label for="username">Total Tagihan</label>
				</div>
				<div class="col-md-4">
					<input type="text" id="totaltagihan" name="totaltagihan" class="form-control" placeholder="Masukkan total tagihan disini" required autofocus><br/>
				</div></br></br></br>
				<div class="col-md-2">
					<label for="username">Tempat Pembayaran</label>
				</div>
				<div class="col-md-4">
					<input type="text" id="tempatbayar" name="tempatbayar" class="form-control" placeholder="Masukkan tempat pembayaran disini" required autofocus><br/>
				</div></br></br></br>
				<div class="button">
					<div class="col-md-5">
					<a href="<?php echo base_url().'dppk'?>" button class="btn btn-md btn-default" type="cancel">Cancel</button></li></a>
					</div>
					<button class="btn btn-md btn-default" type="submit">Submit</button>
				</div>
	</form>
	</br></br>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
</body>
</html>