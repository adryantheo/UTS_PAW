<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  		<link rel="stylesheet" href="/w3css/3/w3.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="contactus.css">
</head>
<body>

	<?php
	session_start();
	include('koneksi.php');
	if($_SESSION['status']!="login"){
	header("location:login.php?pesan=belum_login");
}else{
	echo '<script language="javascript">';
	echo 'alert("Selamat Datang")';
	echo '</script>';
}
	 ?>

	<div class="topnavigation">
		<img style="float: left;" width="180px" src="logo.jpg">
		<a href="login.php">LOGIN</a>
		<a class="active" href="contactus.php">CONTACT US</a>
		<a href="about.php">ABOUT</a>
		<a href="jobs1.php">JOBS</a>
		<a href="home.php">HOME</a>
	</div>

	<div class="contact-title">
		<h1>Say Hello</h1>
		<h2>We are always happy to listen and serve you!</h2><br>
	</div>

	<div class="contact-form" align="center">
		<form id="contact-form" method="post" action="">
			<input name="name" type="text" class="form-control" placeholder="Your Name" required=""><br>
			<input name="email" type="text" class="form-control" placeholder="Your Email" required=""><br>
			<textarea name="message" class="form-control" placeholder="Message" rows="4" required=""></textarea><br>
			<input type="submit" class="form-control submit" value="SEND">
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
