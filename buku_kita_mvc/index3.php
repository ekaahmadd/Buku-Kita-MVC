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
              User
            </div>
            <div class="card-body">
              
               <a href="tambah-user.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH USER</a>
              
              <table class="table-info table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NAMA</th>
                     <th scope="col">USERNAME</th>
                      <th scope="col">PASSWORD</th>
                       <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM user");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['nama'] ?></td>
                      <td><?php echo $row['username'] ?></td>
                      <td><?php echo $row['password'] ?></td>
                      
                      <td class="text-center">
                        <a href="edit-user.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus-user.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
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