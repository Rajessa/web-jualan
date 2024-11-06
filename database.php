<?php
require 'koneksi.php';

$lap = query("SELECT * FROM pesanan");

function query($query)
{
    global $kon;
    $result = mysqli_query($kon, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pemesanan</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('gambar/logo.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            color: white;
        }
        table {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container">
            <a class="navbar-brand" href="#">ABOUT EIGER</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="index.php">HOME <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link active" href="login.php">LOGOUT</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="text-center mt-5">Data Pemesanan</h1>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nomor HP</th>
                    <th scope="col">Email</th>
                    <th scope="col">Barang</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Waktu Pesanan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($lap as $row) : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= htmlspecialchars($row["nama"]); ?></td>
                        <td><?= htmlspecialchars($row["alamat"]); ?></td>
                        <td><?= htmlspecialchars($row["nomor"]); ?></td>
                        <td><?= htmlspecialchars($row["email"]); ?></td>
                        <td><?= htmlspecialchars($row["barang"]); ?></td>
                        <td><?= htmlspecialchars($row["harga"]); ?></td>
                        <td><?= htmlspecialchars($row["waktu_pesanan"]); ?></td>
                        <td>
                            <a href="kwitansi.php?id=<?= htmlspecialchars($row["id"]); ?>" class="btn btn-warning btn-sm">Lunas/Kirim</a>
                            <a href="hapus.php?id=<?= htmlspecialchars($row["id"]); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?');">HAPUS</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
