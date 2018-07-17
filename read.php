<?php
  include("koneksi.php");
  if (isset($_POST['read'])) {
    header("location:index.php");
  }
 ?>
<title>Baca Berita</title>
<!-- <a href="index.php">Home</a><br> -->
  <?php
    $query="SELECT * FROM tbl_berita WHERE id = '$_GET[id]'";
    $result=$mysqli->query($query);
    $row = mysqli_fetch_assoc($result);
    $id=$row['id'];
    $judul=$row['judul'];
    $isi=$row['isi'];
    $gmb=$row['gambar'];
  ?>
  <html lang="en" dir="ltr">
  <head>
    <title></title>
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
          <!-- <li class="active"><a class="white" href="index.html"> <b>Home</b></a></li>
          <li><a class="white" href="#"><b>Kategori</b></a></li>
          <li><a class="white" href="#"><b>Kategori</b></a></li>
          <li><a class="white" href="#"><b>Kategori</b></a></li>
          <li><a class="white" href="#"><b>Kategori</b></a></li>
          <li><a class="white" href="#"><b>Kategori</b></a></li>
          <li><a class="white" href="#"><b>Kategori</b></a></li>
          <li><a class="white" href="#"><b>Kategori</b></a></li> -->
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <a class="navbar-brand glyphicon glyphicon-log-in white" href="login.php"><b> Login</b> </a>
          <!-- <li class="dropdown">
            <a href="#" class="dropdown-toggle white" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
              <li><a href="#"><span class="glyphicon glyphicon-user"></span> Register </a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
            </ul>
          </li>
          <li><a href="#"><span class="glyphicon glyphicon glyphicon-cog white"></span></a></li> -->
        </ul>
        <!-- <form class="navbar-form navbar-right" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </form> -->
      </nav>
      <br><br><br>
      <div class="container container-fluid">
        <div class="col-xl-1-12">
          <!-- <div class="row"> -->
          <div class="well well-lg">
            <div class="row">
              <div class="text-center col-lg-12">
                <img height="400px" src="image/<?php echo $row['gambar']; ?>" class="img-rounded">
              </div>
              <!-- <div class="text-align-right col-sm-1"> -->
                <!-- <button class="btn btn-success glyphicon glyphicon-edit" type="button" name="button"></button><br><br> -->
                <!-- <button class="btn btn-danger glyphicon glyphicon-trash" type="button" name="button"></button> -->
              <!-- </div> -->
            </div>
            <h1><b><?php echo $row['judul']; ?></b> </h1>
            <h5><span class="glyphicon glyphicon-time"></span> Post by Jane Dane, <?php echo $row['tanggal']; ?></h5>
            <p><?php echo $isi; ?>
            </p>
          </div>
          <!-- </div> -->
        </div>
      </div>
    <footer class="container-fluid text-center bg-company-red">
      <h4 class="white"><b>Powered by : Aditya Eka</b></h4>
    </footer>
  </body>
  </html>
