<!DOCTYPE>
<html>
<head>
	<title>About Us</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  		<link rel="stylesheet" href="/w3css/3/w3.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="about.css">
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
		<a class="active" href="about.php">ABOUT</a>
		<a href="jobs1.php">JOBS</a>
		<a href="home.php">HOME</a>
		<a href="home.php">Logout</a>
	</div>

	<div class="judul">
		<h2>TENTANG KAMI</h2>
		<p>Berikut sedikit info mengenai anggota kami</p>
	</div>

	<section class="fluid">
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="card text-center">
							<div class="content">
								<div class="text">
									<p>Misi kami adalah menyelamatkan para pejuang yang tanpa lelah menuntut ilmu dengan cara menawarkan jasa agar kesejahteraan mereka terjamin tidak hanya dengan bantuan belas kasihan para pejuang sebelumnya namun juga oleh jerih payah, darah dan keringat mereka sendiri pula.</p>
								</div>
							</div>
							<div class="author">
								<div class="image">
									<img src="avatar2.jpg" class="img-responsive">
								</div>
								<div class="details">
									<h2>Olin<br><span>Website Designer</span></h2>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card text-center">
							<div class="content">
								<div class="text">
									<p>Misi kami adalah menyelamatkan para pejuang yang tanpa lelah menuntut ilmu dengan cara menawarkan jasa agar kesejahteraan mereka terjamin tidak hanya dengan bantuan belas kasihan para pejuang sebelumnya namun juga oleh jerih payah, darah dan keringat mereka sendiri pula.</p>
								</div>
							</div>
							<div class="author">
								<div class="image">
									<img src="avatar3.jpg" class="img-responsive">
								</div>
								<div class="details">
									<h2>Joshua<br><span>Website Designer</span></h2>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card text-center">
							<div class="content">
								<div class="text">
									<p>Misi kami adalah menyelamatkan para pejuang yang tanpa lelah menuntut ilmu dengan cara menawarkan jasa agar kesejahteraan mereka terjamin tidak hanya dengan bantuan belas kasihan para pejuang sebelumnya namun juga oleh jerih payah, darah dan keringat mereka sendiri pula.</p>
								</div>
							</div>
							<div class="author">
								<div class="image">
									<img src="avatar4.jpg" class="img-responsive">
								</div>
								<div class="details">
									<h2>Leon<br><span>Website Designer</span></h2>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card text-center">
							<div class="content">
								<div class="text">
									<p>Misi kami adalah menyelamatkan para pejuang yang tanpa lelah menuntut ilmu dengan cara menawarkan jasa agar kesejahteraan mereka terjamin tidak hanya dengan bantuan belas kasihan para pejuang sebelumnya namun juga oleh jerih payah, darah dan keringat mereka sendiri pula.</p>
								</div>
							</div>
							<div class="author">
								<div class="image">
									<img src="avatar5.jpg" class="img-responsive">
								</div>
								<div class="details">
									<h2>Theo<br><span>Website Designer</span></h2>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card text-center">
							<div class="content">
								<div class="text">
									<p>Misi kami adalah menyelamatkan para pejuang yang tanpa lelah menuntut ilmu dengan cara menawarkan jasa agar kesejahteraan mereka terjamin tidak hanya dengan bantuan belas kasihan para pejuang sebelumnya namun juga oleh jerih payah, darah dan keringat mereka sendiri pula.</p>
								</div>
							</div>
							<div class="author">
								<div class="image">
									<img src="avatar8.jpg" class="img-responsive">
								</div>
								<div class="details">
									<h2>Yoga<br><span>Website Designer</span></h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<br><br><br>
	<div class="isi">
		<h1>Intoducing The TEAM :D</h1>
		<p>Salam Kenal dan salam sejahtera bagi kita semua. Kami tim yang merupakan mahasiswa Teknik Informatika Universitas Atma Jaya Yogyakarta yang mengambil mata kuliah Aplikasi Pengemangan Web. Disini kami membuat sebuah trobosan baru untuk menyelesaikan masalah sesama rekan seperjuangan para mahasiswa. Dimana salah satu masalahnya adalah kekurangan uang untuk memenuhi kebutuhan hidup, dan untuk menyelesaikannya cara termudah adalah mencari kerja part-time. Namun kami sadar bahwa mencari kerja tidaklah mudah. Kami membuat web ini untuk memudahkan para mahasiswa di wilayah Yogyakarta untuk mencari informasi mengenai lowongan kerja part-time menjadi lebih mudah dan tentunya akurat. Sekian dari kami, jika ada pertanyaan atau pun kritikdan saran silahkan menghubungi kami melalui menu Contact us yang telah kami sediakan di web ini. Peace :3</p>
	</div>
	<br>
	<footer class="foot">
		<br>
		<address>
		Postal Address: Atma Jaya Yogyakarta University, Yogyakarta, DIY, Indonesia.
		</address>
		<p>Copyright © 2018 All rights reserved.</p>
	</footer>

	<script>

		var myIndex = 0;
		carousel();

		function carousel() {
			var i;
			var x = document.getElementsByClassName("mySlides");
			for (i = 0; i < x.length; i++) {
			   x[i].style.display = "none";
			}
			myIndex++;
			if (myIndex > x.length) {myIndex = 1}
			x[myIndex-1].style.display = "block";
			setTimeout(carousel, 3000);
		}
	</script>
</body>
</html>
