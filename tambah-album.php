<?php
include "koneksi.php";

$namaalbum=$_POST['namaalbum'];
$deskripsi=$_POST['deskripsi'];
$tanggaldibuat= $_POST['tanggaldibuat'];
$userid= $_POST['userid'];

$sql=mysqli_query($conn, "INSERT INTO album VALUES('','$namaalbum','$deskripsi','$tanggaldibuat','$userid')");

header("location:album.php");
?>