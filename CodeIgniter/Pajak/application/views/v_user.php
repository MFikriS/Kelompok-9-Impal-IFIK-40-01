<!DOCTYPE html>
<html>
<head>
	<title>Belajar</title>
</head>
<body>
	<h1>Coba</h1>
	<table border="1">
		<tr>
			<th>ID_Pegawai</th>
			<th>Username</th>
			<th>Nama_Pegawai</th>
		</tr>
		<?php foreach($dppk as $d) { ?>
		<tr>
			<td><?php echo $d->ID_Pegawai ?></td>
			<td><?php echo $d->Username ?></td>
			<td><?php echo $d->Nama_Pegawai ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>