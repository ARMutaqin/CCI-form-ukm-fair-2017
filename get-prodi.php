<?php  
	$id = $_GET["prodi"];
	
	include("koneksi.php");


	$query = "select * from jurusan where id_fakultas ='".$id."'";
	$result = mysqli_query($connect, $query);

	echo "";
    while ($data = mysqli_fetch_array($result)) {
		echo "<option value='$data[id_jurusan]'>$data[nama_jurusan]</option>";
    }
    mysqli_close($connect);
?>