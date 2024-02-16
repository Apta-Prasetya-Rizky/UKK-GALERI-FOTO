<?php
include "koneksi.php";
session_start();
$judulfoto=$_POST['judulfoto'];
$deskripsifoto=$_POST['deskripsifoto'];
$tanggalunggah=$_POST['tanggalunggah'];
$albumid=$_POST['albumid'];
$userid=$_POST['userid'];

$rand = rand();
$ekstensi = array('png','jpg','jpeg','gif');
$filename = $_FILES['lokasifile']['name'];  
$ukuran = $_FILES['lokasifile']['size'];
$ext=pathinfo($filename, PATHINFO_EXTENSION);

if (!in_array($ext, $ekstensi)) {
    header('location: foto.php');
} else {
    if ($ukuran<10485760) {   
        $xx = $rand. '_'.$filename;
        move_uploaded_file($_FILES['lokasifile']['tmp_name'], 'media/' .$rand. '_' . $filename);

        
        $sql=mysqli_query($conn, "INSERT INTO foto VALUES('','$judulfoto','$deskripsifoto',
        '$tanggalunggah','$xx','$albumid','$userid')");
        header("location:foto.php"); 
    }
        else {
            header("location: foto1.php");
    }
    
}

?>