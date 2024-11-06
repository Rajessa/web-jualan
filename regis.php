<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembuatan Akun</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('gambar/logo.jpg');
            background-size: cover;
        }
        .teks {
            font-family: lucida;
        }
    </style>
</head>
<body>
    <center><img src="gambar/wallpaper.jpeg" alt="Wallpaper"></center>
    <center><h3 class="text-warning">Registrasi Disini</h3></center>
    <form method="post" action="regis2.php">
        <center>
            <table class="table table-dark" style="width: 50%;">
                <tr>
                    <td><h4 class="text-warning">Nama Pengguna</h4></td>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <td><h4 class="text-warning">Kata Sandi</h4></td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td><h4 class="text-warning">Jabatan</h4></td>
                    <td>
                        <select name="jabatan">
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="buat" value="Tambah"></td>
                </tr>
            </table>
        </center>
    </form>
</body>
</html>
