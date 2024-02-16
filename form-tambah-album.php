<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Album</title>
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
            <h1>Form Tambah Album</h1>
            <form action="tambah-album.php" method="post">
            <table>
                <tr>
                    <td>Nama Album</td>
                    <td><input type="text" name="namaalbum" placeholder="Masukan Nama Album" required></td>
                </tr>
                <tr>
                    <td>Deskripsi Album</td>
                    <td><input type="text" name="deskripsi" placeholder="Masukan Deskripsi" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="button" value="Kembali Ke Halaman Awal" onclick="location.href='album.php'"></td>
                </tr>
            </table>
        </form>
        </div>
    </center>
</body>
</html>