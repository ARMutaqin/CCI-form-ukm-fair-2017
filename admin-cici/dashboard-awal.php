<?php  
  session_start();
  if(empty($_SESSION['login'])){
    header("location: index.php");
  }
  else{
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Admin Dashboard - Central Computer Improvement</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">

	<!-- favicon -->
	<link rel="shortcut icon" href="../img/fav.png">

	<!-- css -->
	<link rel="stylesheet" type="text/css" href="../css/style-admin.css">

	<!-- javascript -->
	<script type="text/javascript" src="../js/ajax.js"></script>

	<!-- Sweetalert -->
  	<link rel="stylesheet" type="text/css" href="../css/sweetalert.css">
  	<script type="text/javascript" src="../js/sweetalert.min.js"></script>

  	<!-- Highchart -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="../code/highcharts.js"></script>
	<script type="text/javascript" src="../code/highcharts-more.js"></script>
	<script type="text/javascript" src="../code/modules/exporting.js"></script>

</head>
<body style="background-color: #edf1ec;">	
	<div class="container-fluid">
		<div class="row">
		 <div class="sidebar">
		   <div class="sidebar-text">
		 	<h3>Admin</h3>
		   </div>
		   <ul>
      		 <li><a href="dashboard.php"><span class="glyphicon glyphicon glyphicon-dashboard" aria-hidden="true"></span>Dashboard</a></li>
      		 <li><a href="data-pendaftar.php"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>Data Pendaftar<span class="glyphicon glyphicon-menu-left" aria-hidden="true" style="margin-left: 30px;"></span></a></li>
      		 <li><a href="logout.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span>Logout</a></li>    
    		</ul>
		 </div>

		 <!-- Konten utama -->
			<div class="konten-utama">
			   <nav class="navbar navbar-default">
	  			<div class="container-fluid">
	  			  <div class="navbar-header">
	  			    <a href="#" class="navbar-brand">Central Computer Improvement</a>     
	  			  </div>
	  			  <p class="navbar-text navbar-right" style="margin-right: 20px;">UKM Fair Telkom University 2017</p>
	  			</div>
			   </nav>
			   <!-- Akhir dari Nav -->

			   <!-- Awal konten -->
			   <div class="isi-konten-dashboard" style="margin-left: 30px;">
			   	  <h3 style="margin-bottom: 15px;">Dashboard</h3>

			   	  <!-- Awal dari 3 kotak di atas -->
			   	  <div class="box-atas" style="background-color: #2ac6d8;">
			   	  	<div class="text-box-atas">
			   	  		<h1><b>700</b></h1>
			   	  		<p style="font-size: 17px; margin-top: 13px;">Pendaftar</p>
			   	  	</div>
			   	  </div>
			   	  <div class="box-atas" style="background-color: #55ca2c;">
			   	  	<div class="text-box-atas">
			   	  		<h1><b>450</b></h1>
			   	  		<p style="font-size: 17px; margin-top: 13px;">Laki-laki</p>
			   	  	</div>
			   	  </div>
			   	  <div class="box-atas" style="background-color: #ec8b0d;">
			   	  	<div class="text-box-atas">
			   	  		<h1><b>250</b></h1>
			   	  		<p style="font-size: 17px; margin-top: 13px;">Perempuan</p>
			   	  	</div>
			   	  </div>
			   	  <!-- Akhir dari box atas -->
			   	  

			   	  <!-- Digram BATANG dengan DIVISI dan JUMLAH PENDAFTAR per DIVISI -->
			   	  <div class="col-md-8" style="background-color: #fff; height: 430px; margin-bottom: 20px;">
			   	    <div id="chartDivisi"></div>
			   	    <script type="text/javascript" src="../js/chart-divisi.js" ></script>
			   	  </div>

			   	  <!-- GAMBAR CICI BERDIRI -->
			   	  <div class="col-md-3" style="background-color: transparent; background-image: url('../img/cici-berdiri.png'); height: 450px; margin-left: 31px; margin-bottom: 20px;"></div>

			   	  <!-- Digram BATANG dengan FAKULTAS dan JUMLAH PENDAFTAR per FAKULTAS -->
			   	  <div class="col-md-11" style="background-color: #fff; height: 350px; margin-bottom: 20px;">
			   	  	<div id="chartFakultas" style="min-width: 300px; height: 330px; margin: 0 auto"></div>
			   		<script type="text/javascript" src="../js/chart-fakultas.js" ></script>
			   	  </div>
			   	  
			   	  <!-- Digram LINGKARAN dengan PRODI dan PRESENTASI per PRODI  -->
				  <div class="col-md-11" style="background-color: #fff; height: 650px; margin-bottom: 20px;">
			   	     <div id="chartProdi" style="min-width: 350px; height: 600px; margin: 0 auto"></div>
			   	     <script type="text/javascript" src="../js/chart-prodi.js" ></script>
			   	  </div>
			   </div>
				<!-- akhir dari konten sebelah kanan -->
				<div class="col-md-12" style="background-color: #fff; height: 64px; border-top: 1px solid #d2d6de;"><br>
					<p style="color: #333; position: relative;"><b>Central Computer Improvement &copy; 2017.</b> UKM Fair 2017 sistem by <a href="#">Aditya Rahmat Mutaqin</a></p>
				  </div>
			</div>
		 </div>
		</div>
	</div>
</body>
</html>
<?php } ?>