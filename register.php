<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laman Register | Gallery</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body> <center>
    <h1>Halaman Registrasi Gallery</h1>
   
    <form action="proses-register.php" method="post">
    <table>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" id="username" required></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" id="password" required></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" id="email" required></td>
        </tr>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td><input type="text" name="namalengkap" id="namalengkap" required></td>
        </tr>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" id="alamat" required></td>
        </tr>
        <tr>
            <td><input type="submit" value="Register"></td>
        </tr>
        <tr>
                <td><input type="button" value="Sudah Punya Akun?" onclick="location.href='login.php'"/></td>
            </tr>
        </table>
    </center>
</form>
</body>
</html>