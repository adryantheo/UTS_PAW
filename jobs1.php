<!DOCTYPE html>
<html>
<head>
	<title>Jobs</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  		<link rel="stylesheet" href="jobs1.css">
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
		<a href="contactus.php">CONTACT US</a>
		<a href="about.php">ABOUT</a>
		<a class="active" href="jobs1.php">JOBS</a>
		<a href="home.php">HOME</a>
		<a href="home.php">Logout</a>
	</div>

	<br><br><br><br><br>
	<h1 style="color: white">Part-Time Jobs</h1>


	<div class="container mySlides" style="max-width:800px">
        <img  src="kasir.jpg" width="600" height="400">
        <div class="centered" style="color: #DC143C;">Kasir</div>
      </div>
      <div class="container mySlides" style="max-width:800px">
        <img  src="iyd.jpg" width="600" height="400">
        <div class="centered" style="color: yellow">Joki MMR</div>
      </div>


      <button class="carButton-left" onclick="plusDivs(-1)">&#10094;</button>

      <button class="carButton-right" onclick="plusDivs(1)">&#10095;</button>

	<script src="jobs1.js"></script>



	<footer class="foot">
		<br>
		<address>
		Postal Address: Atma Jaya Yogyakarta University, Yogyakarta, DIY, Indonesia.
		</address>
		<p>Copyright © 2018 All rights reserved.</p>
	</footer>

</body>
</html>
