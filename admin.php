<!DOCTYPE html>

<html>
<body>
  <?php
  session_start();
  include('koneksi.php');
  if($_SESSION['status']!="login"){
  header("location:login.php?pesan=belum_login");
}
   ?>

 <table border="1">
 <tr>

   <th>Username</th>
   <th>Password</th>
   <th>Email</th>
 </tr>
 <?php
 $sql = "SELECT * FROM user";
 $query = mysqli_query($conn,$sql);

    while($user = mysqli_fetch_array($query)){
      echo "<tr>";


      echo "<td>".$user['username']."</td>";
      echo "<td>".$user['password']."</td>";
      echo "<td>".$user['email']."</td>";

      echo "<td>";
      echo "<a href='edit.php?id=".$user['id']."'>Edit</a> | ";
      echo "<a href='delete.php?id=".$user['id']."'>Hapus</a>";
      echo "</td>";

      echo "</tr>";

    }


  ?>
 </table>
<a href="logout.php">Logout</a>
</body>

 </html>
