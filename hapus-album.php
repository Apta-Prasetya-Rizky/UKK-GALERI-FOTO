<?php
    include "koneksi.php";
    session_start();

    $namaalbum=$_POST['namaalbum'];
    $deskripsi=$_POST['deskripsi'];
    $tanggaldibuat=date("Y-m-d");
    $userid=$_SESSION['userid'];

    $sql=mysqli_query($conn, "DELETE FROM album WHERE album.albumid");

    header('location:album.php');
    
?>