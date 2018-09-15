<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['register'])){

	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');


	$username		= mysqli_real_escape_string($conn, $_POST["username"]);
	$password		= mysqli_real_escape_string($conn, $_POST["password"]);
	$passwordHash = md5($password);
	//$password = password_hash($password, PASSWORD_DEFAULT);
	$email		= mysqli_real_escape_string($conn, $_POST["email"]);
	$hash = md5( rand(0,1000) );




	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysqli_query($conn,"INSERT INTO user VALUES(NULL, '$username', '$passwordHash', '$email','', '$hash', '')") or die(mysqli_error($conn));

	//jika query input sukses
	if($input){

		echo 'Silahkan Cek Email Anda Untuk Melakukan Verifikasi! ';		//Pesan jika proses tambah sukses
		echo '<a href="emailvalid.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah

	}else{

		echo 'Gagal Membuat Account Anda! ';		//Pesan jika proses tambah gagal
		echo '<a href="register.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah

	}

}else{	//jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';

}
?>
