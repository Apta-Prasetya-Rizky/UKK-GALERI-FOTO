<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laman Login | Gallery</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <center>
    <h1>Halaman Login | Gallery</h1>
    <form action="proses-login.php" method="post">
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
                <td><input type="submit" value="Login"></td>
            </tr>
            <tr>
                <td><input type="button" value="Belum Punya Akun?" onclick="location.href='Register.php'"/></td>
            </tr>
        </table>
    </form></center>
</body>
</html>