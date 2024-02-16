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
      <p>Selamat Datang User  <?=$_SESSION['namalengkap']?></p>
    
    </ul>

    <div class="topsearchbar">
      <input type="text" placeholder="Cari ....">
      <button type="button">🔍</button>
    </div> 
  </body>
</html>
