<html lang="en" dir="ltr">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="master.css">
</head>
<body>
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
              <div class="panel-header"><img src="../image/'.$row['gambar'].'" class="img-responsive" style="width:100%" alt="Image"></div>
              <div class="panel-body">
                <h4><b>'.$row['judul'].'</b></h4>
                <h6><span class="glyphicon glyphicon-time"></span> Post by Admin, Sep 27, 2015.</h6>
                <button class="btn btn-success" type="button" name="button"><a class="white" href="edit.php?id='.$row['id'].'"><span class="glyphicon glyphicon-edit"></span></a></button>
                <button class="btn btn-danger" type="button" name="button"><a class="white" href="hapus.php?id='.$row['id'].'" onclick="return confirm(\'Yakin ingin menghapus?\')"><span class="glyphicon glyphicon-trash"></span></a></button>
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
