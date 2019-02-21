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
		<div class="col-md-12">
			<form class="form-horizontal" action="<?php echo base_url('search/sppt'); ?>" method="post">
				<br/><br/><h2 class="text-left">Silakan masukkan NOP Anda di bawah ini</h2><br/><br/>
				<?php echo $this->session->flashdata('message');?>
				<div class="col-md-1">
					<label for="username">NOP</label>
				</div>
				<div class="col-md-4">
					<input type="text" id="nop" onKeyPress="if(this.value.length==18) return false" name="nop" class="form-control" placeholder="Masukkan NOP disini (hanya angka dan 18 digit)" required autofocus><br/>
				</div><br/><br/><br/>
				<div class="button">
					<div class="col-md-4">
					<a href="<?php echo base_url().'dppk'?>" button class="btn btn-md btn-default" type="cancel">Cancel</button></li></a>
					</div>
					<button class="btn btn-md btn-default" type="submit">Submit</button>
				</div>
			</form>
		</div>
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
</body>
</html>