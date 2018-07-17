<?php
  include("koneksi.php");
  if (isset($_POST['tambah'])) {
    $judul=$_POST['judul'];
    $isi=$_POST['isi'];
    $ekstensi_diperbolehkan	= array('png','jpg', 'jpeg');
    $gb = $_FILES['file']['name'];
    $x = explode('.', $gb);
		$ekstensi = strtolower(end($x));
		$ukuran	= $_FILES['file']['size'];
		$file_tmp = $_FILES['file']['tmp_name'];
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){
					move_uploaded_file($file_tmp, './image/'.$gb);
          $perintah = mysqli_query($mysqli, "INSERT INTO tbl_berita (judul,isi,tanggal,gambar) VALUES ('$judul', '$isi' ,now(), '$gb')");
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
		}
    // $perintah = mysqli_query($mysqli, "INSERT INTO tbl_berita (judul,isi,tanggal) VALUES ('$judul', '$isi' ,now())");

 ?>
<title>Tambah Berita</title>
<a href="index.php">Home</a><br>
<h3>Tambah Berita</h3>
<form action="" method="post" enctype="multipart/form-data">
  Judul <br><input type="text" name="judul" placeholder="judul berita"><br>
  Isi Berita <br><textarea name="isi"></textarea>
  Gambar <br><input type="file" name="file">
  <input type="submit" name="tambah" value="tambah berita">
</form>
