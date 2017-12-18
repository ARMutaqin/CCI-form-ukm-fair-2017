<?php
	$connect = mysqli_connect("localhost", "root", "", "db_cci_ukm-fair");
	if(!$connect){
       die('Koneksi gagal: '.mysqli_error());
    }
?>


