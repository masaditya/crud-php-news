<?php
  include ('koneksi.php');
  if (isset($_POST['add'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $perintah = mysqli_query($mysqli, "INSERT INTO admin (username,password) VALUES ('$username', '$password')");
    header("location:admin/indexadmin.php");
  }
 ?>
