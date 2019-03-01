<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<meta charset="utf-8">
		<link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet" type="text/css">
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
			<li><a href="<?php echo base_url().'pembayaran'?>">Pembayaran</a></li>
			<li><a href="<?php echo base_url().'login'?>" button class="btn btn-kecil btn-default" type="cancel">Login</button></li></a>
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