<?php
//mulai proses tambah data


//cek dahulu, jika tombol tambah di klik
if(isset($_POST['login'])){

	session_start();

	//inlcude atau memasukkan file koneksi ke database
	include 'koneksi.php';



	//jika tombol tambah benar di klik maka lanjut prosesnya
	$username		= $_POST['username'];
	$password		= $_POST['password'];
	$md5password = $password;



	$mysqli= "SELECT * FROM user WHERE username='$username' AND password='$password';";
        $show= mysqli_query($conn,$mysqli) or die(mysqli_error($conn));
        $data= mysqli_fetch_array($show);
				$_SESSION['id']=$data['id'];
				$_SESSION['role']=$data['role'];
				$count=mysqli_num_rows($show);



        if(mysqli_num_rows($show)==1){
					if($data['role']=="admin"){
						$_SESSION['status'] = "login";
						header("location:admin.php");
					}else{
						if($data['role']==""){
							$_SESSION['role'] = $data['role'];
							$_SESSION['status'] = "login";
							header("location:jobs1.php");
						}

					}


        }else{
						header("location:login.php?pesan=gagal");

        }



    }
    else
    {
        echo 'tidak terbaca';
    }
?>
