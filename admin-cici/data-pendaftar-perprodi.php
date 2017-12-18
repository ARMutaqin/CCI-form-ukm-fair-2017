<?php

	//DATA PENDAFTAR PERPRODI

	//d3if
	  $queryd3if = "SELECT COUNT(id_pendaftar) FROM pendaftar WHERE fakultas = 'd3if'";
	  $datad3if = mysqli_query($connect, $queryd3if);
	  $resultd3if = mysqli_fetch_array($datad3if);
	  $totald3if = $resultd3if[0];

	//d3ka
	  $queryd3ka = "SELECT COUNT(id_pendaftar) FROM pendaftar WHERE fakultas = 'd3ka'";
	  $datad3ka = mysqli_query($connect, $queryd3ka);
	  $resultd3ka = mysqli_fetch_array($datad3ka);
	  $totald3ka = $resultd3ka[0];

	//d3mi
	  $queryd3mi = "SELECT COUNT(id_pendaftar) FROM pendaftar WHERE fakultas = 'd3mi'";
	  $datad3mi = mysqli_query($connect, $queryd3mi);
	  $resultd3mi = mysqli_fetch_array($datad3mi);
	  $totald3mi = $resultd3mi[0];

	//d3mp
	  $queryd3mp = "SELECT COUNT(id_pendaftar) FROM pendaftar WHERE fakultas = 'd3mp'";
	  $datad3mp = mysqli_query($connect, $queryd3mp);
	  $resultd3mp = mysqli_fetch_array($datad3mp);
	  $totald3mp = $resultd3mp[0];

	//d3ph
	  $queryd3ph = "SELECT COUNT(id_pendaftar) FROM pendaftar WHERE fakultas = 'd3ph'";
	  $datad3ph = mysqli_query($connect, $queryd3ph);
	  $resultd3ph = mysqli_fetch_array($datad3ph);
	  $totald3ph = $resultd3ph[0];

	//d3tk
	  $queryd3tk = "SELECT COUNT(id_pendaftar) FROM pendaftar WHERE fakultas = 'd3tk'";
	  $datad3tk = mysqli_query($connect, $queryd3tk);
	  $resultd3tk = mysqli_fetch_array($datad3tk);
	  $totald3tk = $resultd3tk[0];

	//d3tt
	  $queryd3tt = "SELECT COUNT(id_pendaftar) FROM pendaftar WHERE fakultas = 'd3tt'";
	  $datad3tt = mysqli_query($connect, $queryd3tt);
	  $resultd3tt = mysqli_fetch_array($datad3tt);
	  $totald3tt = $resultd3tt[0];

	//d4sm
	  $queryd4sm = "SELECT COUNT(id_pendaftar) FROM pendaftar WHERE fakultas = 'd4sm'";
	  $datad4sm = mysqli_query($connect, $queryd4sm);
	  $resultd4sm = mysqli_fetch_array($datad4sm);
	  $totald4sm = $resultd4sm[0];

?>