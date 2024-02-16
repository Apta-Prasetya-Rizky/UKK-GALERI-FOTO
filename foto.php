<?php
    session_start();
    if(!isset($_SESSION['userid'])){
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Foto</title>
</head>
<body>
    <h1>Halaman Foto</h1>
    <p>Selamat Datang <b><?=$_SESSION['namalengkap']?></b>, Berikut Daftar Foto Anda</p>
    <h4>Silahkan Pilih Aksi</h4>
    <ul>
        <li><a href="album.php">Album</a></li>
        <li><a href="home.php">Home</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
    <table border="1" width="100%" cellpadding="8px" cellspacing="0">
        <th>Foto ID</th>
        <th>Judul Foto</th>
        <th>Deskripsi Foto</th>
        <th>Foto</th>
        <th>Album</th>
        <th>Aksi</th>
    <?php
        include "koneksi.php";
        $sql=mysqli_query($conn, "select * from foto, album where foto.userid=foto.albumid");
        while($data=mysqli_fetch_array($sql)){
    ?>
            <tr>
                <td align="center"><?=$data['fotoid']?></td>
                <td align="center"><?=$data['judulfoto']?></td>
                <td align="center"><?=$data['deskripsifoto']?></td>
                <td align="center"><img src="foto/<?=$data['lokasifile']?>" width="200px"></td>
                <td align="center"><?=$data['albumid']?></td>
                <td align="center"><a href="hapus-foto.php">Hapus</a></td>
            </tr>
   <?php } ?>
   </table>
    <br>
    <input type="button" value="Tambah Foto" onclick="location.href='form-tambah-Foto.php'">
</body>
</html>