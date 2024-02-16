<?php

session_start();
if (!isset($_SESSION['userid'])){
  header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SMK Muhammadiyah 3 Tangerang Selatan</title>
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
    <link rel="stylesheet" href="style.css">
    <script>

      function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
      }
      
      window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
          var dropdowns = document.getElementsByClassName("dropdown-content");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
          }
        }
      } </script>
  </head>
  <body>
    
  <ul>
      <li><img src="favicon-16x16.png" alt="SMKM 3 Tangsel"></li>
      <li><a href="home.php">Dashboard</a></li>
      <li><a href="album.php">Album</a></li>
      <li><a href="foto.php">Data Foto</a></li>
      <li><a href="login.php">Login</a></li>
      <li><a href="logout.php">Logout</a></li>
      <p>Selamat Datang <?=$_SESSION['namalengkap']?></p>
    
    </ul>

    <div class="topsearchbar">
      <input type="text" placeholder="Cari ....">
      <button type="button">🔍</button>
    </div> 
<h1>Form Upload Photo</h1>
<form action="tambah-album.php" method="post">
<table>
    <tr>
        <td>Nama Album</td>
        <td>
            <input type="text" name="namaalbum" id="namalabum">
            <input type="hidden" name="tanggaldibuat" value="<?=date('Y-m-d');?>">
            <input type="hidden" name="userid" value="<?=$_SESSION['userid'];?>">
        </td>
    </tr>
    <tr>
        <td>Deskripsi</td>
        <td>
            <input type="text" name="deskripsi" id="deskripsi">
        </td>
    </tr>
    <tr>
        <td>
            <input type="submit" value="Create Album">
        </td>
    </tr>
</table>
</form>

<table border="1" cellpadding="5" cellspacing="0">
<tr>
      <th>ID</th>
      <th>Judul</th>
      <th>Deskripsi</th>
      <th>Tanggal Unggah</th>
      <th>Lokasi File</th>
      <th>Album</th>
      <th>Disukai</th>
      <th>Aksi</th>
    </tr>
    <?php
    include "koneksi.php";
    $userid=$_SESSION['userid'];
    $sql=mysqli_query($conn,"SELECT * FROM foto,album where foto.userid='$userid' and foto.albumid=album.albumid"); 
    while($data = mysqli_fetch_array($sql)) {
      ?>
      <tr>
        <td><?=$data['fotoid'];?></td>
        <td><?=$data['judulfoto'];?></td>
        <td><?=$data['deskripsifoto'];?></td>
        <td><?=$data['tanggalunggah'];?></td>
        <td><img src="media/<?=$data['lokasifile'];?>" width="200px" alt=""></td>
        <td><?=$data['namaalbum'];?></td>
        <td>
          <?php
          $fotoid = $data['fotoid'];
          $sql2 = mysqli_query($conn, "SELECT * FROM likefoto WHERE fotoid='$fotoid'");
          echo mysqli_num_rows($sql2);
          ?>
        </td>
        <td>
          <a href="hapus-album.php?fotoid=<?=$data['albumid']?>">Hapus</a>
          <a href="edit-album.php?fotoid=<?=$data['albumid']?>">Edit</a>
        </td>
      </tr>
    <?php }
 ?>    
</table>
  </body>
</html>
