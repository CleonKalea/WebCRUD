<?php

$conn = mysqli_connect ("localhost", "root", "", "prodi");

$nim = $_GET["NIM"];

$delete = mysqli_query($conn, "delete from mahasiswa where NIM ='$nim'");

if ($delete){
    echo "<script> alert ('Data Berhasil Dihapus')</script>";
    header("refresh:0;index.php");
}else{
    echo "<script> alert ('Data Tidak Berhasil Dihapus')</script>";
    header("refresh:0;index.php");
}
?>