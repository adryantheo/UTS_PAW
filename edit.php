<!DOCTYPE html>
<html>

<body>
	<h2>Edit Data</h2>

	<?php

	include('koneksi.php');

	//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
	$id = $_GET['id'];

	//melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
	$show = mysqli_query($conn,"SELECT * FROM user WHERE id='$id'");

	//cek apakah data dari hasil query ada atau tidak
	if(mysqli_num_rows($show) == 0){

		//jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
		echo '<script>window.history.back()</script>';

	}else{

		//jika data ditemukan, maka membuat variabel $data
		$data = mysqli_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah

	}
	?>

	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">	<!-- membuat inputan hidden dan nilainya adalah siswa_id -->
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" size="30" value="<?php echo $data['username']; ?>" required></td>	<!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email" size="30" value="<?php echo $data['email']; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr>
      <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="text" name="password" size="30" value="<?php echo $data['password']; ?>" required></td> <!-- value diambil dari hasil query -->
      </tr>


			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>
