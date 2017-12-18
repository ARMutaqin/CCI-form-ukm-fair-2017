<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <div id="content">
      <form class = "form-horizontal" method="post" align="center">
		<pre>
       Username     <input type="text" name="username" placeholder="Username"><br>
       Password (1) <input type="password" name="password" placeholder="Password"><br>
	<input type="submit" name="buatUser" value="Buat User Baru">
		</pre>
	  </form>
	  
	  
	<?php
		include('../koneksi.php');
		if (isset($_POST['buatUser'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$pass = md5($password);		
				$query = "insert into admin (username, password) values ('$username', '$pass')";
				$data = mysqli_query ($connect, $query);
				
				if($data){
					echo "<script>window.alert('User berhasil dibuat'); </script>";
				}
				else{
					echo "<script>window.alert('User gagal dibuat'); </script>";
				}
		}
  ?>
  </div>
  
</body>
</html>