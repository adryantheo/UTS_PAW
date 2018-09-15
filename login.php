<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  		<link rel="stylesheet" href="/w3css/3/w3.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>

	<?php
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo '<script language="javascript">';
			echo 'alert("Username atau Password Anda Salah")';
			echo '</script>';
		}else if($_GET['pesan'] == "logout"){
			echo '<script language="javascript">';
			echo 'alert("Berhasil LogOut")';
			echo '</script>';
		}else if($_GET['pesan'] == "belum_login"){
			echo '<script language="javascript">';
			echo 'alert("Silahkan Login Terlebih Dahulu :)")';
			echo '</script>';
		}
	}
	?>


	<div class="topnavigation">
		<img style="float: left;" width="180px" src="logo.jpg">
		<a class="active" href="">LOGIN</a>
		<a href="contactus.php">CONTACT US</a>
		<a href="about.php">ABOUT</a>
		<a href="jobs1.php">JOBS</a>
		<a href="home.php">HOME</a>
	</div>

	<div class="loginbox">
		<img src="avatar.jpg" class="avatar">
		<h1>Login Here</h1>
		<br>
		<form action="login-proses.php" method="post">
			<p>Username</p>
			<input type="text" id="username" name="username" placeholder="Enter Username" required>
			<p>Password</p>
			<input type="password" id="password" name="password" placeholder="Enter Password" required>
			<input type="submit" name="login" value="Login">
			<a href="ForgotPassword.php">Forget your Password?</a><br>
			<a href="register.php">Don't have an account?</a>
		</form>
	</div>

	



	<footer class="foot">
		<br>
		<address>
		Postal Address: Atma Jaya Yogyakarta University, Yogyakarta, DIY, Indonesia.
		</address>
		<p>Copyright © 2018 All rights reserved.</p>
	</footer>

</body>
</html>
