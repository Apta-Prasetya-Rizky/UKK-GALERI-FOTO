<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
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
            <h1>Halaman Login</h1>
            <form action="proses-login.php" method="post">
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
                        <td></td>
                        <td><input type="submit" value="Login"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="button" value="Belum Punya Akun?" onclick="location.href='register.php'"></td>
                    </tr>
                </table>
            </form>
        </div>
    </center>
</body>
</html>