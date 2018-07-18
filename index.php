    <title>Home</title>
    <?php
      include("koneksi.php");
      // echo '<a href="tambah.php">Tambah Berita</a><br>';
      include("list.php");
     ?>
     <?php
//        $query = mysqli_query("SELECT * FROM 'tbl_berita' ORDER BY 'id' DESC");
//        while ($data=mysqli_fetch_array($query)) {
//          echo '
//          <div style="max-width:450px;">
//            <hr>
//            <h3>'.$data['judul'].'</h3>
//            <small>Tanggal  : '.$data['tanggal'].'</small><br>
//            <a href="edit.php?id='.$data['id'].'">Edit</a>
//            <a href="hapus.php?id='.$data['id'].'" onclick="return confirm(\'Yakin ingin menghapus?\')">Hapus</a>
//            <p>'.$data['isi'].'</p>
//          </div>
//          ';
//        }
     ?>
