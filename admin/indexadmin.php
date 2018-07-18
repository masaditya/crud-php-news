<title>Home</title>
<?php
include("koneksi.php");
// echo '<a href="tambah.php">Tambah Berita</a><br>';
?>
<body>
  <nav class="navbar navbar-toggleable-md navbar-dark bg-company-red headnav">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand glyphicon glyphicon-home white" href="#"></a>
      </div>
      <!-- <div class="navbar-header"> -->
      <ul class="nav navbar-nav navbar-left">
        <li class="active"><a class="white" href="#"> <b>Home</b></a></li>
      </ul>
      <!-- </div> -->
      <!-- <div class="navbar-header"> -->
        <ul class="nav navbar-nav navbar-right">
          <a class="navbar-brand glyphicon glyphicon-pencil white" href="tambah.php"><b>Tambah</b> </a>
          <a class="navbar-brand glyphicon glyphicon-log-out white" href="logout.php" onclick="return confirm(\'Yakin ingin menghapus?\')"><b>Logout</b> </a>

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
</body>
<?php
include("list.php");
?>
<?php
// $query = mysqli_query("SELECT * FROM 'tbl_berita' ORDER BY 'id' DESC");
// while ($data=mysqli_fetch_array($query)) {
//   echo '
//   <div style="max-width:450px;">
//   <hr>
//   <h3>'.$data['judul'].'</h3>
//   <small>Tanggal  : '.$data['tanggal'].'</small><br>
//   <a href="edit.php?id='.$data['id'].'">Edit</a>
//   <a href="hapus.php?id='.$data['id'].'" onclick="return confirm(\'Yakin ingin menghapus?\')">Hapus</a>
//   <p>'.$data['isi'].'</p>
//   </div>
//   ';
// }
?>
