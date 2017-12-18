<?php  
  session_start();
  include "../koneksi.php";
  if(empty($_SESSION['login'])){
    header("location: index.php");
  }
  else{

  // Total Pendaftar
  $querypendaftar = "SELECT COUNT(id_pendaftar) FROM pendaftar";
  $datapendaftar = mysqli_query($connect, $querypendaftar);
  $resultpendaftar = mysqli_fetch_array($datapendaftar);
  $totalpendaftar = $resultpendaftar[0];

  // Total Pendaftar Laki - Laki
  $querypendaftarlk = "SELECT COUNT(id_pendaftar) FROM pendaftar WHERE jenis_kelamin = 'Laki-laki'";
  $datapendaftarlk = mysqli_query($connect, $querypendaftarlk);
  $resultpendaftarlk = mysqli_fetch_array($datapendaftarlk);
  $totalpendaftarlk = $resultpendaftarlk[0];

  // Total Pendaftar Perempuan
  $querypendaftarpr = "SELECT COUNT(id_pendaftar) FROM pendaftar WHERE jenis_kelamin = 'Perempuan'";
  $datapendaftarpr = mysqli_query($connect, $querypendaftarpr);
  $resultpendaftarpr = mysqli_fetch_array($datapendaftarpr);
  $totalpendaftarpr = $resultpendaftarpr[0];

  // Total daftar perdivisi
  	//dr
	  $querydr = "SELECT COUNT(id_pendaftar) FROM pendaftar WHERE divisi = 'DR'";
	  $datadr = mysqli_query($connect, $querydr);
	  $resultdr = mysqli_fetch_array($datadr);
	  $totaldr = $resultdr[0];

  	//design
	  $querydesign = "SELECT COUNT(id_pendaftar) FROM pendaftar WHERE divisi = 'Design'";
	  $datadesign = mysqli_query($connect, $querydesign);
	  $resultdesign = mysqli_fetch_array($datadesign);
	  $totaldesign = $resultdesign[0];

	//gg
	  $querygg = "SELECT COUNT(id_pendaftar) FROM pendaftar WHERE divisi = 'GG'";
	  $datagg = mysqli_query($connect, $querygg);
	  $resultgg = mysqli_fetch_array($datagg);
	  $totalgg = $resultgg[0];

  	//network
	  $querynetwork = "SELECT COUNT(id_pendaftar) FROM pendaftar WHERE divisi = 'Network'";
	  $datanetwork = mysqli_query($connect, $querynetwork);
	  $resultnetwork = mysqli_fetch_array($datanetwork);
	  $totalnetwork = $resultnetwork[0];

	 //students
	  $queryStudents = "SELECT COUNT(id_pendaftar) FROM pendaftar WHERE divisi = 'Students'";
	  $dataStudents = mysqli_query($connect, $queryStudents);
	  $resultStudents = mysqli_fetch_array($dataStudents);
	  $totalStudents = $resultStudents[0];

  	//webdev
	  $queryWebdev = "SELECT COUNT(id_pendaftar) FROM pendaftar WHERE divisi = 'Webdev'";
	  $dataWebdev = mysqli_query($connect, $queryWebdev);
	  $resultWebdev = mysqli_fetch_array($dataWebdev);
	  $totalWebdev = $resultWebdev[0];

	 //DATA CHART FAKULTAS
	  //fte
	  $queryfte = "SELECT COUNT(id_pendaftar) FROM pendaftar WHERE fakultas = 'fte'";
	  $datafte = mysqli_query($connect, $queryfte);
	  $resultfte = mysqli_fetch_array($datafte);
	  $totalfte = $resultfte[0];

	  //fif
	  $queryfif = "SELECT COUNT(id_pendaftar) FROM pendaftar WHERE fakultas = 'fif'";
	  $datafif = mysqli_query($connect, $queryfif);
	  $resultfif = mysqli_fetch_array($datafif);
	  $totalfif = $resultfif[0];

	  //fri
	  $queryfri = "SELECT COUNT(id_pendaftar) FROM pendaftar WHERE fakultas = 'fri'";
	  $datafri = mysqli_query($connect, $queryfri);
	  $resultfri = mysqli_fetch_array($datafri);
	  $totalfri = $resultfri[0];

	  //fik
	  $queryfik = "SELECT COUNT(id_pendaftar) FROM pendaftar WHERE fakultas = 'fik'";
	  $datafik = mysqli_query($connect, $queryfik);
	  $resultfik = mysqli_fetch_array($datafik);
	  $totalfik = $resultfik[0];

	  //feb
	  $queryfeb = "SELECT COUNT(id_pendaftar) FROM pendaftar WHERE fakultas = 'feb'";
	  $datafeb = mysqli_query($connect, $queryfeb);
	  $resultfeb = mysqli_fetch_array($datafeb);
	  $totalfeb = $resultfeb[0];

	  //fkb
	  $queryfkb = "SELECT COUNT(id_pendaftar) FROM pendaftar WHERE fakultas = 'fkb'";
	  $datafkb = mysqli_query($connect, $queryfkb);
	  $resultfkb = mysqli_fetch_array($datafkb);
	  $totalfkb = $resultfkb[0];

	  //fit
	  $queryfit = "SELECT COUNT(id_pendaftar) FROM pendaftar WHERE fakultas = 'fit'";
	  $datafit = mysqli_query($connect, $queryfit);
	  $resultfit = mysqli_fetch_array($datafit);
	  $totalfit = $resultfit[0];
	  



	 

	 

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
      		 <li><a href="dashboard.php"><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span>Dashboard</a></li>
      		 <li><a href="data-pendaftar.php"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>Data Pendaftar<span class="glyphicon glyphicon glyphicon-chevron-down" aria-hidden="true" style="margin-left: 30px;"></span></a>
      		 <ul>
      		 	<li><a href="data-pendaftar-dr.php">Data Research</a></li>
      		 	<li><a href="data-pendaftar-desain.php">Design</a></li>
      		 	<li><a href="data-pendaftar-gg.php">Game and Gadget</a></li>
      		 	<li><a href="data-pendaftar-network.php">Network</a></li>
      		 	<li><a href="data-pendaftar-students.php">Media Management</a></li>
      		 	<li><a href="data-pendaftar-webdev.php">Web Development</a></li>
      		 </ul>
      		 </li>
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
			   	  <div class="box-atas" style="background-color: #2ac6d8; background-image: url('../img/icon-kotak-people.png'); ">
			   	  	<div class="text-box-atas">
			   	  		<h1><b><?php echo $totalpendaftar; ?></b></h1>
			   	  		<p style="font-size: 19px; margin-top: 13px;">Pendaftar</p>
			   	  	</div>
			   	  </div>
			   	  <div class="box-atas" style="background-color: #55ca2c; background-image: url('../img/icon-kotak-lk.png')">
			   	  	<div class="text-box-atas">
			   	  		<h1><b><?php echo $totalpendaftarlk; ?></b></h1>
			   	  		<p style="font-size: 19px; margin-top: 13px;">Laki-laki</p>
			   	  	</div>
			   	  </div>
			   	  <div class="box-atas" style="background-color: #ec8b0d; background-image: url('../img/icon-kotak-pr.png')">
			   	  	<div class="text-box-atas">
			   	  		<h1><b><?php echo $totalpendaftarpr; ?></b></h1>
			   	  		<p style="font-size: 19px; margin-top: 13px;">Perempuan</p>
			   	  	</div>
			   	  </div>
			   	  <!-- Akhir dari box atas -->
			   	  

			   	  <!-- Digram BATANG dengan DIVISI dan JUMLAH PENDAFTAR per DIVISI -->
			   	  <div class="col-md-8" style="background-color: #fff; height: 430px; margin-bottom: 20px;">
			   	    <div id="chartDivisi"></div>
			   	    

<!-- CHART DIVISI -->
<script type="text/javascript">
	var chart = Highcharts.chart('chartDivisi', {
    title: {
        text: 'Diagram Pendaftar by Divisi'
    },

    xAxis: {
        categories: ['Data Research', 'Design', 'Games and Gadget', 'Network', 'Media Management', 'Web Development']
    },
    tooltip: {
    		    pointFormat: 'Pendaftar : <b>{point.y} orang</b>'
    		},

    series: [{
        type: 'column',
        colorByPoint: true,
        data: [<?php echo "$totaldr, $totaldesign, $totalgg, $totalnetwork, $totalStudents, $totalWebdev,"; ?>],
        showInLegend: false
    }]

});
</script>
<!-- END OF CHART DIVISI -->
			   	  </div>

			   	  <!-- GAMBAR CICI BERDIRI -->
			   	  <div class="col-md-3" style="background-color: transparent; background-image: url('../img/cici-berdiri.png'); height: 450px; margin-left: 31px; margin-bottom: 20px;"></div>
<!-- 
			   	  <div class="col-md-11" style="background-color: #fff; height: 350px; margin-bottom: 20px;">
			   	  	<div id="chartFakultas" style="min-width: 300px; height: 330px; margin: 0 auto"></div>
			   </div>
 -->				<!-- akhir dari konten sebelah kanan -->
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