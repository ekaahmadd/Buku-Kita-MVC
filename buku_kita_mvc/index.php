<?php
session_start();
if(!isset($_SESSION["login"])){
  header("location:../buku_kita_mvc/tentang.php");
  exit;
}else
?>


<!doctype html>
<html lang="en">
  <head>
    <?php require_once 'html_head.php';
    ?>
    <title>Data Siswa</title>
  </head>

  <body>
    <?php
  include "nav.php";
  ?>
</ul>
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA BUKU
            </div>
            <div class="card-body">
              <a href="tambah-buku.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH BUKU</a>
               
              <table class="table-info table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    
                    <th scope="col">JUDUL</th>
                    <th scope="col">PENERBIT</th>
                    <th scope="col">PENGARANG</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col">ID.KATEGORI</th>
                    <th scope="col">HARGA</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM buku ");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      
                      <td><?php echo $row['judul'] ?></td>
                      <td><?php echo $row['penerbit'] ?></td>
                      <td><?php echo $row['pengarang'] ?></td>
                      <td><?php echo $row['tahun'] ?></td>
                      <td><?php echo $row['kategori_id'] ?></td>
                      <td><?php echo $row['harga'] ?></td>
                      <td class="text-center">
                        <a href="edit-buku.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus-buku.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
  <?php
  include "footer.php";
  ?>
   
  </body>
</html>