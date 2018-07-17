<!DOCTYPE html>
<html>
<head>
	<!-- <title>Membuat Login Dengan PHP dan MySQLi - WWW.MALASNGODING.COM</title> -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="login.css">
</head>
<body>
	<!-- <h2>Login - www.malasngoding.com</h2> -->
	<!-- cek pesan notifikasi -->
	<?php
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
			echo '
			<div class="alert alert-danger" role="alert">
				<b>Login Gagal!</b>
			</div>
			';
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<div class="login-form">

	<form method="post" action="add_admin.php">
		<div class="avatar">
			<img src="./image/avatar.png" alt="Avatar">
		</div>
		<h2 class="text-center">Register Admin</h2>
		<div class="form-group">
			<input type="text" class="form-control" name="username" placeholder="Username" required="required">
		</div>
		<div class="form-group">
			<input type="password" class="form-control" name="password" placeholder="Password" required="required">
		</div>
		<div class="form-group">
      <input type="submit" name="add" value="Register" class="btn btn-primary btn-lg btn-block">
			<!-- <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button> -->
		</div>
		<!-- <div class="clearfix">
			<label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
			<a href="#" class="pull-right">Forgot Password?</a>
		</div> -->
	</form>
</div>
</body>
</html>
