<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Foto</title>
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
            <h1>Form Tambah Foto</h1>
            <form action="tambah-foto.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Judul Foto</td>
                    <td><input type="text" name="judulfoto" placeholder="Masukan Judul Foto" required></td>
                </tr>
                <tr>
                    <td>Deskripsi Foto</td>
                    <td><input type="text" name="deskripsifoto" placeholder="Masukan Deskripsi" required></td>
                </tr>
                <tr>
                    <td>foto</td>
                    <td><input type="file" name="lokasifile" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="button" value="Kembali Ke Halaman Awal" onclick="location.href='foto.php'"></td>
                </tr>
            </table>
        </form>
        </div>
    </center>
</body>
</html>