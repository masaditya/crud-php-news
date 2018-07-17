<?php
  include("koneksi.php");
  if (isset($_POST['edit'])) {
    $ekstensi_diperbolehkan	= array('png','jpg', 'jpeg');
    $gb = $_FILES['file']['name'];
    $x = explode('.', $gb);
    $ekstensi = strtolower(end($x));
    $ukuran	= $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 1044070){
          move_uploaded_file($file_tmp, './image/'.$gb);
          $qedit="UPDATE tbl_berita SET judul= '$_POST[judul]', isi='$_POST[isi]', gambar='$gb' WHERE id = '$_POST[id]'";
          $editb=$mysqli->query($qedit);
          // $perintah = mysqli_query($mysqli, "INSERT INTO tbl_berita (judul,isi,tanggal,gambar) VALUES ('$judul', '$isi' ,now(), '$gb')");
          // $query = mysql_query("INSERT INTO upload VALUES(NULL, '$nama')");
          if($perintah){
            echo 'FILE BERHASIL DI UPLOAD';
          }else{
            echo 'GAGAL MENGUPLOAD GAMBAR';
          }
        }else{
          echo 'UKURAN FILE TERLALU BESAR';
        }
      }else{
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
      }
    // $qedit="UPDATE tbl_berita SET judul= '$_POST[judul]', isi='$_POST[isi]', gambar='$_POST[gambar]' WHERE id = '$_POST[id]'";
    // $editb=$mysqli->query($qedit);
    header("location:index.php");
  }
 ?>
<title>Edit Berita</title>
<a href="index.php">Home</a><br>
<h3>Edit Berita</h3>
<form action="" method="post" enctype="multipart/form-data">
  <?php
    $query="SELECT * FROM tbl_berita WHERE id = '$_GET[id]'";
    $result=$mysqli->query($query);
    $row = mysqli_fetch_assoc($result);
    $id=$row['id'];
    $judul=$row['judul'];
    $isi=$row['isi'];
    $gmb=$row['gambar'];
    echo '
      Judul <br><input type="text" name="judul" value="'.$judul.'" placeholder="judul berita"><br>
      Isi Berita <br><textarea name="isi">'.$isi.'</textarea><br>
      <input type="hidden" name="id" value="'.$id.'"><br>
      <img src="./image/'.$gmb.'"><br>
      Gambar <br><input type="file" name="file">
    ';
  ?>
  <input type="submit" name="edit" value="Edit Berita">
</form>
