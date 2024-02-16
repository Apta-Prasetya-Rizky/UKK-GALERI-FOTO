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
            <h1>Login Gagal</h1>
            <p>Silahkan Cek Kembali Username Atau Password Anda</p>
            <input type="button" value="Coba Lagi" onclick="location.href='login.php'">
            <input type="button" value="Belum Punya Akun?" onclick="location.href='register.php'">
        </div>
    </center>
</body>
</html>