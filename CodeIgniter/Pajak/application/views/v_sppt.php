<!DOCTYPE html>
<html>
<head>
	<title>SPPT</title>
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
	<h1>SPPT Anda</h1>
	<table border="4">
		<tr>
			<th class="text-center">No SPPT</th>
			<th class="text-center">NOP</th>
			<th>Tahun</th>
			<th>Tanggal Jatuh Tempo</th>
			<th>Denda</th>
			<th>Total Tagihan</th>
			<th>Tempat Pembayaran</th>
		</tr>
		<?php foreach($sppt as $s) { ?>
		<tr>
			<td><?php echo $s->No_SPPT ?></td>
			<td><?php echo $s->NOP ?></td>
			<td><?php echo $s->Tahun ?></td>
			<td><?php echo $s->Tgl_Jatuh_Tempo ?></td>
			<td><?php echo $s->Denda ?></td>
			<td><?php echo $s->Total_Tagihan ?></td>
			<td><?php echo $s->Tempat_Pembayaran ?></td>
		</tr>
		<?php } ?>
	</table>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
</body>
</html>