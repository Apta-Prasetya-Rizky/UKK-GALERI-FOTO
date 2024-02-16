<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register</title>
    <style>
        .container{
            width: 350px;
            background-color: honeydew;
            padding: 30px;
            border-radius: 8px;
            margin-top: 150px;
        }

        .container form input[type='submit']{
            background-color: black;
            color: white;
            padding: 8px 10px;
            border-radius: 8px;
            cursor: pointer;
        }

        .container form input[type='button']{
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
            <h1>Halaman Register</h1>
            <form action="proses-register.php" method="post">
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" placeholder="Masukan Username" required></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" placeholder="Masukan Password" required></td>
                    </tr>
                    <tr>
                        <td>email</td>
                        <td><input type="email" name="email" placeholder="Masukan Email" required></td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td><input type="text" name="namalengkap" placeholder="Masukan Nama Lengkap" required></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input type="text" name="alamat" placeholder="Masukan Alamat Anda" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Register"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="button" value="Sudah Punya Akun?" onclick="location.href='login.php'"></td>
                    </tr>
                </table>
            </form>
        </div>
    </center>
</body>
</html>