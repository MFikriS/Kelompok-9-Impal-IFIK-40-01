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
	<div class="container">
		<form class="form-horizontal" action="<?php echo base_url('search/sppt'); ?>" method="post">
				<br/><br/><h2>Silakan masukkan Nomor SPPT yang ingin Anda cari</h2><br/><br/>
				<div class="col-md-2">
					<label for="username">Nomor SPPT</label>
				</div>
				<div class="col-md-4">
					<input type="text" id="nop" name="nosppt" class="form-control" placeholder="Masukkan Nomor SPPT disini" required autofocus><br/>
				</div><br/><br/><br/>
				<div class="button">
					<div class="col-md-5">
					<a href="<?php echo base_url().'dppk'?>" button class="btn btn-md btn-default" type="cancel">Cancel</button></li></a>
					</div>
					<button class="btn btn-md btn-default" type="submit">Submit</button>
				</div>
				</br></br></br></br>
			</form>
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