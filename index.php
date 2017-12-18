<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Pendaftaran - Central Computer Improvement</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

	<!-- favicon -->
	<link rel="shortcut icon" href="img/fav.png">

	<!-- css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- javascript -->
	<script type="text/javascript" src="js/ajax.js"></script>

	<!-- Sweetalert -->
  	<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
  	<script type="text/javascript" src="js/sweetalert.min.js"></script>
</head>
<body>
<div class="bg">
   <img class="background" src="img/bg2.jpg">
   <img class="background" src="img/bg3.jpg">


	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#" style="padding-top: 5px;">
	        <img alt="Logo" src="img/logo.png" style="height: 40px; width: 75px;">
	      </a>
	      <a href="#" class="navbar-brand">Central Computer Improvement</a>     
	    </div>
	    <p class="navbar-text navbar-right" style="margin-right: 20px;">UKM Fair Telkom University 2017</p>
	  </div>
	</nav>
	<div class="container"">
		<div class="row" class="text-center" class="pagination-centered">

			<div class="col-md-6" style="margin-top: 5%;">
			
				<div class="tulisan-cci">
				  <h1>Central Computer Improvement</h1>
				  <h3>Connect, Share, Speak up!</h3><br>
				  <p style="font-size: 16px;">Unit Kegiatan Mahasiswa di Telkom University yang berfokus <br> pada bidang ICT (<i>Information, Communication and Technology</i>).</p>
				  <h3>Divisi:</h3>
				  <ul>
					<li style="font-size: 17px;">Data Research</li>
					<li style="font-size: 17px;">Design</li>
					<li style="font-size: 17px;">Games and Gadget</li>
					<li style="font-size: 17px;">Network</li>
					<li style="font-size: 17px;">Media Management</li>
					<li style="font-size: 17px;">Web Development</li>
				  </ul>
				</div>
				<br>

				<!-- <blockquote class="blockquote-reverse">
					<p style="color: #ffffff;">Makrab CCI 2016</p>
					<footer>Sabtu-Minggu, 19-20 November 2016 at Villa Batu, Lembang</footer>
				</blockquote> -->

			</div>
			
			<div class="col-md-5 col-md-offset-1" style="background-color: white;" >
				<h2>Pendaftaran</h2>
				<h4 style="color: #969eaa">Mari bergabung dan jadi bagian dari CCI!</h4>
				<hr>
			
			<!-- form -->
			<form class="form-horizontal" method="post">
				  <div class="form-group">
				    <label for="nama" class="sr-only">Nama</label>
				    <div class="col-sm-12">
				      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama lengkap" required>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="nim" class="sr-only">nim</label>
				    <div class="col-sm-12">
				      <input type="text" class="form-control" id="nim" name="nim" placeholder="Nomor Induk Mahasiswa" required>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="ttl" class="sr-only">ttl</label>
				    <div class="col-sm-12">
				      <input type="text" class="form-control" id="ttl" name="ttl" placeholder="Tempat, tanggal lahir (Cth: Bandung, 10 Juli 1999)" required>
				    </div>
				  </div>
				  <label class="radio-inline">
  						<input type="radio" name="jk" id="jk" value="Laki-laki" required> Laki-laki
				  </label>
				  <label class="radio-inline">
  						<input type="radio" name="jk" id="jk" value="Perempuan"> Perempuan
				  </label><br><br>
				  <div class="form-group">
				    <label for="fakultas" class="sr-only">fakultas</label>
				    <div class="col-sm-12">
				    	<select class="form-control" name="fakultas" onchange="showProdi(this.value)" required>
				    		<option value="" disabled selected  style="display: none;">Fakultas</option>

				    		<?php  
				    			include("koneksi.php");

				    			$query = "select * from fakultas";
				    			$result = mysqli_query($connect, $query);
				    			echo "";
				    			while($data = mysqli_fetch_array($result)){
				    				echo "<option value='$data[id_fakultas]'>$data[nama_fakultas]</option>";
				    			}
				    			mysqli_close($connect);
				    		?>  
			            </select>
				    	</select>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="prodi" class="sr-only">prodi</label>
				    <div class="col-sm-12">
				    	<select class="form-control" name="prodi" id="prodi" required>
				    		<option value="" disabled selected  style="display: none;">Jurusan</option>
				    	</select>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="divisi" class="sr-only">divisi</label>
				    <div class="col-sm-12">
				    	<select class="form-control" name="divisi" required>
				    		<option value="" disabled selected style="display: none;">Pilihan Divisi</option>
				    		<option value='DR'>Data Research</option>
				    		<option value='Design'>Design</option>
				    		<option value='GG'>Games and Gadget</option>
				    		<option value='Network'>Network</option>
				    		<option value='Students'>Media Management</option>
				    		<option value='Webdev'>Web Development</option>
				    	</select>
				    </div>
				  </div>

				  
				  <div class="form-group">
				    <label for="alasan-gabung" class="sr-only">alasan-gabung</label>
				    <div class="col-sm-12">
				      <textarea class="form-control" name="alasanGabung" placeholder="Alasan ingin gabung CCI..." rows="3" required></textarea>
				      <!-- <input type="text" class="form-control" id="alasan" name="alasan" placeholder="Alasan ingin gabung CCI" required> -->
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="nohp" class="sr-only">nohp</label>
				    <div class="col-sm-12">
				      <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Nomor handphone" required>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="idline" class="sr-only">idline</label>
				    <div class="col-sm-12">
				      <input type="text" class="form-control" id="idline" name="idline" placeholder="Id Line" required>
				    </div>
				  </div>
			
				  
				  
				  <div class="form-group">
				    <div class="col-sm-12">
				      <button type="submit" class="btn btn-primary btn-lg btn-block" name="submitDaftar">Daftar</button>
				    </div>
				  </div><br>
			</form>
			</div>

			<?php

		include("koneksi.php");

		if(isset($_POST['submitDaftar'])){
			$nama = $_POST['nama'];
			$nim = $_POST['nim'];
			$ttl = $_POST['ttl'];
			$jk = $_POST['jk'];
			$fakultas = $_POST['fakultas'];
			$prodi = $_POST['prodi'];
			$divisi = $_POST['divisi'];
			$alasanGabung = $_POST['alasanGabung'];
			$nohp = $_POST['nohp'];
			$idline = $_POST['idline'];

			$query = "INSERT INTO pendaftar (id_pendaftar, nama, nim, tempat_tanggal_lahir, jenis_kelamin, fakultas, jurusan, divisi, alasanGabung, nohp, idLine) values (' ', '$nama', '$nim', '$ttl', '$jk', '$fakultas', '$prodi', '$divisi', '$alasanGabung', '$nohp', '$idline')";

			$result = mysqli_query($connect, $query);

			if($result){
				echo "<script>swal('Data pendaftaran dengan nama $nama dan nim $nim berhasil dimasukan. Jangan lupa dateng open mind yaa!', '*Cek info selanjutnya di akun resmi CCI', 'success');</script>";
			}
			else{
				echo "<script>swal('Data gagal dimasukan', 'Silahkan ulangi kembali!', 'error');</script>";
			}
		}
	?>

		</div><br><br>
	</div>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p class="text-center" style="color: white; position: relative;">Central Computer Improvement &copy; 2017. Open Mind 2017 sistem by <a href="#">Aditya Rahmat Mutaqin</a></p>
				</div>
			</div>
		</div>
	</footer>
</div>
</body>
</html>