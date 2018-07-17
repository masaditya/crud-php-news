<?php
  $host='localhost';
  $user='root';
  $password='';
  $database='berita';
  $mysqli=mysqli_connect($host, $user, $password, $database);
  if (mysqli_connect_errno()) {
    echo "Koneksi database gagal ".mysqli_connect_errno();
    exit();
    mysqli_close($mysqli);
  }
 ?>
