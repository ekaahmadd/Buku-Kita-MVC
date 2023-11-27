<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM kategori WHERE id = '$id'";

if($connection->query($query)) {
    header("location: index2.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>