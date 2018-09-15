<?php
  $server="localhost";
  $username="root";
  $password="";
  $database="uts";

$conn= mysqli_connect($server,$username,$password) or die("gagal terkoneksi");
  mysqli_select_db($conn,$database) or die("gagal terhubung database");

 ?>
