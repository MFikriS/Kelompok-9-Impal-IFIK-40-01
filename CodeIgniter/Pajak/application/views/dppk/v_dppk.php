<!DOCTYPE html>
<html>
<head>
	<title>Welcome DPPK</title>
</head>
<body>
	<h1>Login Berhasil</h1>
	<h2> Hai, <?php echo $this->session->userdata("Username"); ?></h2>
	<a href="<?php echo base_url('login/logout'); ?>">Logout</a>
</body>
</html>