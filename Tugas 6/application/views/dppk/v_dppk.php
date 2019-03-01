<!DOCTYPE html>
<html>
<html>
	<head>
		<title>Welcome DPPK</title>
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
	<br/><br/><br/><br/><br/>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
</body>
</html>