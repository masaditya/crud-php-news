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
        $status = 'FILE BERHASIL DI UPLOAD';
      }else{
        $status = 'GAGAL MENGUPLOAD GAMBAR';
      }
    }else{
      $status = 'UKURAN FILE TERLALU BESAR';
    }
  }else{
    $status = 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
  }
}
// $perintah = mysqli_query($mysqli, "INSERT INTO tbl_berita (judul,isi,tanggal) VALUES ('$judul', '$isi' ,now())");

?>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="master.css">
</head>
<body>
  <nav class="navbar navbar-toggleable-md navbar-dark bg-company-red headnav">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand glyphicon glyphicon-home white" href="indexadmin.php"></a>
      </div>
      <!-- <div class="navbar-header"> -->
      <ul class="nav navbar-nav navbar-left">
        <li class="active"><a class="white" href="indexadmin.php"> <b>Home</b></a></li>
      </ul>
      <!-- </div> -->
      <!-- <div class="navbar-header"> -->
        <ul class="nav navbar-nav navbar-right">
          <a class="navbar-brand glyphicon glyphicon-pencil white" href="tambah.php"><b>Tambah</b> </a>
          <a class="navbar-brand glyphicon glyphicon-log-out white" href="logout.php"><b>Logout</b> </a>

          <!-- <li> <a class="glyphicon glyphicon-log-out white" href="logout.php"></a></li> -->
              <!-- <li><a href="#">Separated link</a></li> -->
            </ul>
          <!-- <li><a href="#"><span class="glyphicon glyphicon glyphicon-cog white"></span></a></li> -->

      <!-- </div> -->
      <!-- <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Register </a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
      <li><a href="#"><span class="glyphicon glyphicon glyphicon-cog"></span> Setting</a></li>
    </ul> -->
    <!-- <form class="navbar-form navbar-right" role="search"> -->
      <!-- <div class="form-group">
      <input type="text" class="form-control" placeholder="Search">
    </div> -->
    <!-- <button type="button" class="btn btn-submit">
      <a href="tambah.php"><span class="glyphicon glyphicon-pencil">Tambah Berita</span></a>
    </button> -->
  <!-- </form> -->
  </nav>
<br><br><br>
<div class="container container-fluid">
  <div class="col-xl-1-12">
    <!-- <div class="row"> -->
    <div class="well well-lg">
      <div class="row">
        <div class="text-center col-lg-12">
          <form action="" method="post" enctype="multipart/form-data">
            <h1>Tambah Berita</h1>
            <div class="form-group">
              <textarea class="form-control" rows="2" name="judul" placeholder="Judul Berita"></textarea>
            </div>
              <div class="form-group">
                <textarea class="form-control" rows="10" name="isi" placeholder="Isi Berita"></textarea>
              </div>
              <input type="file" name="file">
              <input type="submit" name="tambah" value="tambah berita" class="btn btn-primary">
            </form>
          </div>
        </div>
      </div>
      <!-- </div> -->
    </div>
  </div>
</body>
