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
           <li><a href="data-pendaftar.php"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>Data Pendaftar<span class="glyphicon glyphicon-chevron-down" aria-hidden="true" style="margin-left: 30px;"></span></a>
           <ul>
            <li><a href="data-pendaftar-dr.php">Data Research</a></li>
            <li><a href="data-pendaftar-desain.php">Design</a></li>
            <li><a href="data-pendaftar-gg.php">Game and Gadget</a></li>
            <li><a href="data-pendaftar-network.php">Network</a></li>
            <li><a href="data-pendaftar-students.php">Media Management</a></li>
            <li><a href="data-pendaftar-webdev.php">Web Development</a></li>
           </ul>
           </li><li><a href="logout.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span>Logout</a></li>    
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
         <div class="isi-konten-dashboard" style="margin-left: 70px;">
            <h3 style="margin-bottom: 15px;">Data Pendaftar Network</h3>
                 <!-- Awal Tabel -->
            <div class="col-md-11" style="height: 270%; margin-bottom: 20px;">
              <table>
  <tr>
    <th>No.</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>TTL</th>
                <th>Jenis Kelamin</th>
                <th>Fakultas</th>
                <th>Prodi</th>
                <th>Divisi</th>
                <th>Alasan Gabung</th>
                <th>No. Hp</th>
                <th>Id Line</th>
  </tr>
  
  <!-- awal data pendaftar dari database -->

          <?php 
            include("../koneksi.php");

            // $halaman = 10;
            // $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
            // $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
            $query = "SELECT * FROM pendaftar";
            $result = mysqli_query($connect, $query);
            $total = mysqli_num_rows($result);
            $sqlQuery = mysqli_query($connect, "SELECT * FROM pendaftar WHERE divisi='Network' ORDER BY id_pendaftar ASC"  );
                    $no = 1;
                    while($data = mysqli_fetch_array($sqlQuery)){ 
                      echo '<tr>';
                        echo '<td>'.$no.'</td>';  //menampilkan nomor urut
                        echo '<td>'.$data['nama'].'</td>';                 
                        echo '<td>'.$data['nim'].'</td>';  
                        echo '<td>'.$data['tempat_tanggal_lahir'].'</td>';                   
                        echo '<td>'.$data['jenis_kelamin'].'</td>';
                        echo '<td>'.$data['fakultas'].'</td>';
                        echo '<td>'.$data['jurusan'].'</td>'; 
                        echo '<td>'.$data['divisi'].'</td>';                 
                        echo '<td>'.$data['alasanGabung'].'</td>';  
                        echo '<td>'.$data['nohp'].'</td>';                   
                        echo '<td>'.$data['idLine'].'</td>';
                    echo "</tr>";                            
                      $no++;
                    }              
              mysqli_close($connect);
          ?>
  <!-- akhir data pendaftar dari database -->

  
</table>
            </div>
         </div>
            
         
        <!-- akhir dari konten sebelah kanan -->

        <!-- navbar dashboard
        <div class="col-md-12" style="background-color: #fff; height: 64px; border-top: 1px solid #d2d6de;"><br>
          <p style="color: #333; position: relative;"><b>Central Computer Improvement &copy; 2017.</b> UKM Fair 2017 sistem by <a href="#">Aditya Rahmat Mutaqin</a></p>
          </div> -->
      </div>
     </div>
    </div>
  </div>
</body>
</html>
<?php } ?>