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
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              Kategori
            </div>
            <div class="card-body">
             
                <a href="kategori.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH KATEGORI</a>
              <table class="table-info table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">ID.</th>
                    <th scope="col">NAMA KATEGORI</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM kategori");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['nama_kategori'] ?></td>
                      
                      <td class="text-center">
                      <!-- <a href="edit-kategori.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">EDIT</a> -->
                        <a href="hapus-kategori.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>
                  

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>
<?php
include "footer.php";
?>
   
  </body>
</html>