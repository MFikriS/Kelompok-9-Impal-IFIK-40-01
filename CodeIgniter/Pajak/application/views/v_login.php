<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
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
	<div class="container">
		<div class="col-md-4 col-md-offset-4">
			<form class="form-signin" action="<?php echo base_url('login/aksi_login'); ?>" method="post">
				<h2 class="text-center">Login DPPK</h2>
				<label for="username">Username</label>
				<input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus><br/>
				<label for="password">Password</label>
				<input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
				<div class="checkbox">
					<label>
					<input type="checkbox" value="remember-me"> Remember me
					</label>
				</div>
				<div class="button">
					<div class="col-md-9">
					<a href="<?php echo base_url().'beranda'?>" button class="btn btn-md btn-default" type="cancel">Cancel</button></li></a>
					</div>
					<button class="btn btn-md btn-default" type="submit">Login</button>
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