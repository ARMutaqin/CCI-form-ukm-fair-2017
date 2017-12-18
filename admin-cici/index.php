<?php  
  
  session_start();
  include "../koneksi.php";
  if(isset($_POST['submitLogin'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    
    $query = "select * from admin where username='$user' and password='$pass'";
    $data = mysqli_query ($connect, $query);
    
    if(mysqli_num_rows($data)>0){
      $_SESSION['login'] = $user;
      echo "<script>window.location.href = 'dashboard.php';</script>";
    }
    else{
      echo "<h3 style='margin-top:100px;' align='center'>Akses login yang anda masukan salah. Silahkan ulangi kembali pada link dibawah ini!</h3>";
      echo "<h3 align='center'><a href='index.php'><b>LOGIN ADMIN</b></a></h3>";
    }
  }
  else{
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Login Admin - Central Computer Improvement</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">

	<!-- favicon -->
	<link rel="shortcut icon" href="../img/fav.png">

	<!-- css -->
	<link rel="stylesheet" type="text/css" href="../css/style-admin.css">
	<link rel="stylesheet" type="text/css" href="../css/style-login-admin.css">

	<!-- javascript -->
	<script type="text/javascript" src="../js/ajax.js"></script>

	<!-- Sweetalert -->
  	<link rel="stylesheet" type="text/css" href="../css/sweetalert.css">
  	<script type="text/javascript" src="../js/sweetalert.min.js"></script>
</head>
<body style="background-color: #11fae7;">	
	<div class="container" style="padding-top:7%">
		<div class="row">
		<div class="col-md-4 col-lg-offset-4" style="border: solid; border-color: #ccc; padding-bottom: 10px; background-color: #fff;"><br>

			<h2 class="text-center"><b>Login Admin</b></h2><br><br>
			<form class="form-horizontal" class="form-center" method="post" role="form" align="center">
				<div class="form-group">
					<label for="username" class="sr-only">username</label>
				    <div class="col-md-12">
				      <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
				    </div>
				</div>
				<div class="form-group">
					<label for="password" class="sr-only">password</label>
				    <div class="col-md-12">
				      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
				    </div>
				</div><br>
				<div class="form-group">
				    <div class="col-md-12">
				      <button type="submit" class="btn btn-primary btn-lg btn-block" name="submitLogin">Login</button>
				    </div>
				  </div>
			</form><br><br><br>
			<p class="text-center">Central Computer Improvement &copy; 2017</p><br>
		</div>

		
		</div>
	</div>
</body>
</html>
 <?php  
  }
 ?>