<!DOCTYPE html>
<!-- <html lang="en" dir="ltr"> -->
<!-- <head>
  <meta charset="utf-8">
  <title>Home</title>
</head> -->
<!-- <body> -->
  <?php
  // include ("koneksi.php");
  // $query = "SELECT * FROM tbl_berita ORDER BY id DESC";
  // $result=$mysqli->query($query);
  // if ($result->num_rows > 0) {
  //   while($row = $result->fetch_assoc()) {
  //     echo '
  //     <div style="max-width:450px;">
  //         <hr>
  //         <img src="./image/'.$row['gambar'].'">
  //         <h3>'.$row['judul'].'</h3>
  //         <small>Tanggal  : '.$row['tanggal'].'</small><br>
  //         <a href="edit.php?id='.$row['id'].'">Edit</a>
  //         <a href="read.php?id='.$row['id'].'">Read</a>
  //         <a href="hapus.php?id='.$row['id'].'" onclick="return confirm(\'Yakin ingin menghapus?\')">Hapus</a>
  //       </div>
  //       ';
  //   }
  // } else {
  //   echo "0 results";
  // }
  // $mysqli->close();
  ?>
<!-- </body> -->
<!-- </html> -->
<html lang="en" dir="ltr">
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
        <a class="navbar-brand glyphicon glyphicon-home white" href="index.php"></a>
      </div>
      <ul class="nav navbar-nav navbar-left">
        <li class="active"><a class="white" href="index.php"> <b>Home</b></a></li>
        <!-- <li><a class="white" href="#"><b>Kategori</b></a></li>
        <li><a class="white" href="#"><b>Kategori</b></a></li>
        <li><a class="white" href="#"><b>Kategori</b></a></li>
        <li><a class="white" href="#"><b>Kategori</b></a></li>
        <li><a class="white" href="#"><b>Kategori</b></a></li>
        <li><a class="white" href="#"><b>Kategori</b></a></li>
        <li><a class="white" href="#"><b>Kategori</b></a></li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <a class="navbar-brand glyphicon glyphicon-log-in white" href="login.php"><b> Login</b> </a>

        <!-- <li><a href="#">Link</a></li> -->
        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle white" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span></a>
          <ul class="dropdown-menu"> -->
            <!-- <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li> -->
            <!-- <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login </a></li> -->
            <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Register </a></li> -->
            <!-- <li role="separator" class="divider"></li> -->
            <!-- <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li> -->
            <!-- <li><a href="#">Separated link</a></li> -->
          <!-- </ul> -->
        <!-- </li> -->
        <!-- <li><a href="#"><span class="glyphicon glyphicon glyphicon-cog white"></span></a></li> -->

      </ul>
      <!-- <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Register </a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
      <li><a href="#"><span class="glyphicon glyphicon glyphicon-cog"></span> Setting</a></li>
    </ul> -->
    <!-- <form class="navbar-form navbar-right" role="search"> -->
      <!-- <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div> -->
      <!-- <button type="submit" class="btn btn-submit">
        <span class="glyphicon glyphicon-search"></span>
      </button>
    </form> -->
  </nav>
  <br><br><br><br>
  <div class="container">
    <div class="row">
        <?php
        include ("koneksi.php");
        $query = "SELECT * FROM tbl_berita ORDER BY id DESC";
        $result=$mysqli->query($query);
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo '
            <div class="col-sm-4">
            <div class="panel panel-success">
              <div class="panel-header"><img src="./image/'.$row['gambar'].'" class="img-responsive" style="width:100%" alt="Image"></div>
              <div class="panel-body">
                <h4><b>'.$row['judul'].'</b></h4>
                <h6><span class="glyphicon glyphicon-time"></span> Post by Admin, Sep 27, 2015.</h6>
                <button class="btn btn-success" type="button"  name="button"><a class="white" href="read.php?id='.$row['id'].'"><span class="glyphicon glyphicon-read">Read</span></a></button>
              </div>
            </div>
            </div>
            ';
          }
        }
        $mysqli->close();
        ?>
    </div>
  </div><br>
  <footer class="container-fluid text-center bg-company-red">
    <h4 class="white"><b>Powered by : Aditya Eka</b></h4>
  </footer>
</body>
</html>
