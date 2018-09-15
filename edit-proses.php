<?php
//mulai proses edit data

//cek dahulu, jika tombol simpan di klik
if(isset($_POST['simpan'])){

	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');

	//jika tombol tambah benar di klik maka lanjut prosesnya
	$id			= $_POST['id'];	//membuat variabel $id dan datanya dari inputan hidden id
  $username		= $_POST['username'];
	$password		= $_POST['password'];
	$passwordHash = md5($password);
	$email		= $_POST['email'];



	//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE siswa_id='$id' <- diambil dari inputan hidden id
	$update = mysqli_query($conn,"UPDATE user SET username='$username', password='$passwordHash', email='$email' WHERE id='$id'") or die(mysqli_error($conn));

	//jika query update sukses
	if($update){

		echo 'Data berhasil di simpan! ';		//Pesan jika proses simpan sukses
		echo '<a href="admin.php">Kembali</a>';	//membuat Link untuk kembali ke halaman edit

	}else{

		echo 'Gagal menyimpan data! ';		//Pesan jika proses simpan gagal
		echo '<a href="edit.php?id='.$id.'">Kembali</a>';	//membuat Link untuk kembali ke halaman edit

	}

}else{	//jika tidak terdeteksi tombol simpan di klik

	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';

}
?>
