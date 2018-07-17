<?php
  include("koneksi.php");
  if (isset($_GET['id'])) {
    $id=$_GET['id'];
    // DELETE FROM `tbl_berita` WHERE `tbl_berita`.`id` =$id
    $qdelete="DELETE FROM `tbl_berita` WHERE `tbl_berita`.`id` =$id";
    $deleteb=$mysqli->query($qdelete);
    header("location:index.php");
  }
 ?>
