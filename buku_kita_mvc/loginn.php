<?php
session_start();
include "koneksi.php";

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "select * from user where username='".$username."' and
password='".$password."' limit 1";

$hasil = mysqli_query ($connection,$sql);

$jumlah = mysqli_num_rows($hasil);

if ($jumlah>0) {
    $row = mysqli_fetch_assoc($hasil);
    $_SESSION['login'] = true;
    header("Location:index.php");
    }else {
    echo "Username atau password salah <br><a href='login.php'>Kembali</a>";
    }
    
?>