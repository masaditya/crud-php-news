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
    header("location:indexadmin.php");
  }
 ?>
<title>Edit Berita</title>
<!-- <a href="index.php">Home</a><br> -->
<!-- <h3>Edit Berita</h3> -->
<!-- <form action="" method="post" enctype="multipart/form-data"> -->
  <?php
    // $query="SELECT * FROM tbl_berita WHERE id = '$_GET[id]'";
    // $result=$mysqli->query($query);
    // $row = mysqli_fetch_assoc($result);
    // $id=$row['id'];
    // $judul=$row['judul'];
    // $isi=$row['isi'];
    // $gmb=$row['gambar'];
    // echo '
    //   Judul <br><input type="text" name="judul" value="'.$judul.'" placeholder="judul berita"><br>
    //   Isi Berita <br><textarea name="isi">'.$isi.'</textarea><br>
    //   <input type="hidden" name="id" value="'.$id.'"><br>
    //   <img src="./image/'.$gmb.'"><br>
    //   Gambar <br><input type="file" name="file">
    // ';
  ?>
  <!-- <input type="submit" name="edit" value="Edit Berita">
</form> -->
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
            <?php
              $query="SELECT * FROM tbl_berita WHERE id = '$_GET[id]'";
              $result=$mysqli->query($query);
              $row = mysqli_fetch_assoc($result);
              $id=$row['id'];
              $judul=$row['judul'];
              $isi=$row['isi'];
              $gmb=$row['gambar'];
            ?>
            <h1>Edit Berita</h1>
            <div class="form-group">
              <input type="text" name="judul" value="<?php echo $judul; ?>" class="form-control">
              <!-- <textarea class="form-control" rows="2" name="judul" value="jancok" ></textarea> -->
            </div>
              <div class="form-group">
                <input type="text" class="form-control" rows="10" name="isi" placeholder="Isi Berita" value="<?php echo $isi; ?>">
              </div>
              <input type="hidden" name="id" value="<?php echo $id; ?>">
              <img src="../image/<?php echo $gmb; ?>" alt="">
              <input type="file" name="file">
              <input type="submit" name="edit" value="edit berita" class="btn btn-primary">
            </form>
          </div>
        </div>
      </div>
      <!-- </div> -->
    </div>
  </div>
</body>
