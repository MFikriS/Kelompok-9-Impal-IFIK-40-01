<!DOCTYPE html>
<html>
<html>
	<head>
		<title>Input Objek Pajak</title>
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
	<form class="form-signin" action="<?php echo base_url('proses_input_objekpajak/aksi_buat'); ?>" method="post">
		<h2 class="text-center">Form Input Objek Pajak</h2><br/><br/>
				<div class="col-md-2">
					<label for="username">NPWP</label>
				</div>
				<div class="col-md-4">
					<select name="npwp" id="npwp" class="form-control">
                            <option value="0">-PILIH-</option>
                            <?php foreach($data as $row):?>
                                <option value="<?php echo $row->NPWP;?>"></option>
                            <?php endforeach;?>
                        </select>
				</div></br></br></br>
				<div class="col-md-2">
					<label for="username">NOP(Nomor Wajib Pajak)</label>
				</div>
				<div class="col-md-4">
					<input type="text" id="nop" name="nop" class="form-control" placeholder="Masukkan NOP disini" required autofocus><br/>
				</div><br/><br/></br>
				<div class="col-md-2">
					<label for="username">ID Pegawai</label>
				</div>
				<div class="col-md-4">
					<input type="text" id="idpegawai" name="idpegawai" class="form-control" placeholder="Masukkan ID Pegawai disini" required autofocus><br/>
				</div></br></br></br>
				<div class="col-md-2">
					<label for="username">Jenis Penggunaan Bangunan</label>
				</div>
				<div class="col-md-4">
					<input type="text" id="jenis" name="jenis" class="form-control" placeholder="Masukkan jenis penggunaan bangunan disini" required autofocus><br/>
				</div></br></br></br>
				<div class="col-md-2">
					<label for="username">Letak Objek Pajak</label>
				</div>
				<div class="col-md-4">
					<input type="text" id="letak" name="letak" class="form-control" placeholder="Masukkan letak objek pajak disini" required autofocus><br/>
				</div></br></br></br>
				<div class="col-md-2">
					<label for="username">Luas Bangunan (m2)</label>
				</div>
				<div class="col-md-4">
					<input type="text" id="luasbangunan" name="luasbangunan" class="form-control" placeholder="Masukkan luas bangunan(m2) disini" required autofocus><br/>
				</div></br></br></br>
				<div class="col-md-2">
					<label for="username">Luas Tanah (m2)</label>
				</div>
				<div class="col-md-4">
					<input type="text" id="luastanah" name="luastanah" class="form-control" placeholder="Masukkan luas tanah (m2) disini" required autofocus><br/>
				</div></br></br></br>
				<div class="col-md-2">
					<label for="username">Nilai Jual (Rp)</label>
				</div>
				<div class="col-md-4">
					<input type="text" id="nilaijual" name="nilaijual" class="form-control" placeholder="Masukkan nilai jual disini" required autofocus><br/>
				</div></br></br></br>
				<div class="col-md-2">
					<label for="username">Kelas</label>
				</div>
				<div class="col-md-4">
					<input type="text" id="kelas" name="kelas" class="form-control" placeholder="Masukkan kelas disini" required autofocus><br/>
				</div></br></br></br>
				<div class="col-md-2">
					<label for="username">NJOP per m2</label>
				</div>
				<div class="col-md-4">
					<input type="text" id="njop" name="njop" class="form-control" placeholder="Masukkan njop per m2 disini" required autofocus><br/>
				</div></br></br></br>
				<div class="col-md-2">
					<label for="username">Total NJOP</label>
				</div>
				<div class="col-md-4">
					<input type="text" id="totalnjop" name="totalnjop" class="form-control" placeholder="Otomasi keisi" required autofocus><br/>
				</div></br></br></br>
				<div class="col-md-2">
					<label for="username">NJOPTKP</label>
				</div>
				<div class="col-md-4">
					<input type="text" id="njoptkp" name="njoptkp" class="form-control" placeholder="Masukkan njoptkp disini" required autofocus><br/>
				</div></br></br></br>
				<div class="col-md-2">
					<label for="username">NJKP</label>
				</div>
				<div class="col-md-4">
					<input type="text" id="njkp" name="njkp" class="form-control" placeholder="Masukkan njkp disini" required autofocus><br/>
				</div></br></br></br>
				<div class="col-md-2">
					<label for="username">PBB Terhutang</label>
				</div>
				<div class="col-md-4">
					<input type="text" id="pbbterhutang" name="pbbterhutang" class="form-control" placeholder="Otomatis keisi" required autofocus><br/>
				</div></br></br></br>
				<div class="button">
					<div class="col-md-5">
					<a href="<?php echo base_url().'beranda'?>" button class="btn btn-md btn-default" type="cancel">Cancel</button></li></a>
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