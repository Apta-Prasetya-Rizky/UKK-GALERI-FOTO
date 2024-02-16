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
    <title>Halaman Album</title>
</head>
<body>
    <h1>Halaman Album</h1>
    <p>Selamat Datang <b><?=$_SESSION['namalengkap']?></b>, Berikut Daftar Album Anda</p>
    <h4>Silahkan Pilih Aksi</h4>
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="foto.php">Foto</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
    <table border="1" width="100%" cellpadding="8px" cellspacing="0">
        <th>ID</th>
        <th>Nama Album</th>
        <th>Deskripsi Album</th>
        <th>Tanggal Dibuat</th>
        <th>Aksi</th>
    <?php
        include "koneksi.php";
        $sql=mysqli_query($conn, "select * from album, user where album.userid=user.userid");
        while($data=mysqli_fetch_array($sql)){
    ?>
            <tr>
                <td align="center"><?=$data['albumid']?></td>
                <td align="center"><?=$data['namaalbum']?></td>
                <td align="center"><?=$data['deskripsi']?></td>
                <td align="center"><?=$data['tanggaldibuat']?></td>
                <td align="center"><a href="hapus-album.php">Hapus</a></td>
            </tr>
   <?php } ?>
   </table>
   <br>
    <input type="button" value="Tambah Album" onclick="location.href='form-tambah-album.php'">
</body>
</html>