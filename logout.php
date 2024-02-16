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
    <title>404  </title>
    <style>
        .container{
            width: 350px;
            background-color: honeydew;
            padding: 30px;
            border-radius: 8px;
            margin-top: 150px;
        }

        .container input[type='button']{
            background-color: black;
            color: white;
            padding: 8px 10px;
            border-radius: 8px;
            cursor: pointer;
        }
    </style>
</head>
<body style="background-color: gray;">
    <center>
        <div class="container">
            <h2>Apakah Anda Yakin Ingin Logout <?=$_SESSION['namalengkap']?></h2>
            <input type="button" value="Ya" onclick="location.href='loggout.php'">
            <input type="button" value="Kembali" onclick="location.href='home.php'">
        </div>
    </center>
</body>
</html>