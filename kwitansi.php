<?php
require 'koneksi.php';

// Ambil ID pesanan dari URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Ambil detail pesanan dari database
$query = "SELECT * FROM pesanan WHERE id = $id";
$result = mysqli_query($kon, $query);
$pesanan = mysqli_fetch_assoc($result);

if (!$pesanan) {
    echo "Pesanan tidak ditemukan.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwitansi</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('gambar/logo.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            color: white;
            padding: 20px;
        }
        .kwitansi {
            border: 1px solid #000;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            color: black;
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
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="kwitansi mt-5">
            <h2 class="text-center">Kwitansi Pembayaran</h2>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Nama Pemesan:</strong> <?= htmlspecialchars($pesanan['nama']); ?></p>
                    <p><strong>Alamat:</strong> <?= htmlspecialchars($pesanan['alamat']); ?></p>
                    <p><strong>Nomor HP:</strong> <?= htmlspecialchars($pesanan['nomor']); ?></p>
                    <p><strong>Email:</strong> <?= htmlspecialchars($pesanan['email']); ?></p>
                </div>
                <div class="col-md-6">
                    <p><strong>Nama Barang:</strong> <?= htmlspecialchars($pesanan['barang']); ?></p>
                    <p><strong>Harga:</strong> Rp <?= number_format($pesanan['harga'], 2, ',', '.'); ?></p>
                    <p><strong>Tanggal Pemesanan:</strong> <?= htmlspecialchars($pesanan['waktu_pesanan']); ?></p>
                </div>
            </div>
            <hr>
            <p class="text-center">Terima kasih telah berbelanja di EIGER SHOP!</p>
        </div>
        <a href="database.php" class="btn btn-primary mt-3">Kembali</a>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
