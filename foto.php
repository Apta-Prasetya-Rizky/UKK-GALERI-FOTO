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

    <form action="tambah-foto.php" enctype="multipart/form-data" method="POST">
        <table>
        <tr>
            <td>Judul Foto</td>
            <td><input type="text" name="judulfoto" id="judulfoto"></td>
        </tr>
        <tr>
            <td>Deskripsi Foto</td>
            <td><input type="text" name="deskripsifoto" id="deskripsifoto"></td>
        </tr>
        <tr>
            <td>Tanggal Unggah</td>
            <td><input type="text" value="<?=date('Y-m-d');?>" readonly name="tanggalunggah"></td>
        </tr>
        </tr>
        <tr>
            <td>Upload Foto</td>
            <td><input type="file" accept="image/*" name="lokasifile" id="lokasifile"></td>
        </tr>
        </tr>
        <tr>
            <td>Album</td>
            <td>
                <select name="albumid" id="">
                    <?php 
                    include 'koneksi.php';
                    $userid = $_SESSION['userid'];
                    $sql = mysqli_query($conn, "SELECT * FROM album WHERE userid=$userid");
                    while($data = mysqli_fetch_array($sql)) {
                    ?>
                    <option value="<?=$data['albumid']?>"><?=$data['namaalbum']?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>User ID</td>
            <td>
                <input type="text" readonly name="userid" value="<?=$_SESSION['userid']?>">
            </td>
        </tr>
        <tr>
            
            <td><input type="submit" value="Upload"></td>
        </tr>
        </table>
    </form>
  </body>
</html>