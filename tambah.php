<?php
require 'koneksi.php';

// Ambil data produk dari database
$query_produk = "SELECT id, nama, harga FROM produk";
$result_produk = mysqli_query($kon, $query_produk);

// Cek apakah ada parameter id yang dikirimkan dari toko.php
if(isset($_GET['id'])) {
    $id_produk = mysqli_real_escape_string($kon, $_GET['id']);

    // Query untuk mengambil data produk berdasarkan id
    $query_produk_by_id = "SELECT nama, harga FROM produk WHERE id = '$id_produk'";
    $result_produk_by_id = mysqli_query($kon, $query_produk_by_id);
    $row_produk = mysqli_fetch_assoc($result_produk_by_id);

    // Set nilai default untuk nama produk dan harga
    $default_nama_produk = $row_produk['nama'];
    $default_harga_produk = $row_produk['harga'];
} else {
    // Jika tidak ada parameter id, set nilai default kosong
    $default_nama_produk = '';
    $default_harga_produk = '';
}

// Cek apakah form telah di-submit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $nama = mysqli_real_escape_string($kon, $_POST['nama']);
    $alamat = mysqli_real_escape_string($kon, $_POST['alamat']);
    $nomor = mysqli_real_escape_string($kon, $_POST['nomor']);
    $email = mysqli_real_escape_string($kon, $_POST['email']);
    $barang = mysqli_real_escape_string($kon, $_POST['barang']);
    $harga = mysqli_real_escape_string($kon, $_POST['harga']);
    
    // Masukkan data ke database
    $query = "INSERT INTO pesanan (nama, alamat, nomor, email, barang, harga) VALUES ('$nama', '$alamat', '$nomor', '$email', '$barang', '$harga')";
    if (mysqli_query($kon, $query)) {
        // Data berhasil disimpan, tampilkan popup
        echo "<script>alert('Pesanan sudah diterima dan akan diproses.'); window.location.href = 'toko.php';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan pesanan.');</script>";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>Tambah Pesanan</title>
    <style>
      body {
        background-image: url(gambar/wallpaper.jpeg);
      }
    </style>
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-warning">
        <div class="container">
            <a class="navbar-brand" href="#">ABOUT EIGER</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="index2.php">HOME</a>
                    <a class="nav-item nav-link active" href="toko.php">PEMESANAN</a>
                    <a class="nav-item nav-link active" href="login.php">LOGOUT</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Form Pemesanan</h1>
        <form method="post" action="">
            
            <div class="form-group">
                <label>Nama Produk</label>
                <input type="text" class="form-control" name="barang" id="barang" value="<?php echo $default_nama_produk; ?>" readonly placeholder="Nama Produk">
            </div>
            <div class="form-group">
                <label>Harga Produk</label>
                <input type="text" class="form-control" name="harga" id="harga" value="<?php echo $default_harga_produk; ?>" readonly placeholder="Harga Produk">
            </div>
            <div class="form-group">
                <label>Nama Pemesan</label>
                <input type="text" class="form-control" name="nama" required placeholder="Masukkan Nama Pemesan">
            </div>
            <div class="form-group">
                <label>Alamat Pemesan</label>
                <input type="text" class="form-control" name="alamat" required placeholder="Masukkan Alamat Pemesan">
            </div>
            <div class="form-group">
                <label>Nomor Handphone Pemesan</label>
                <input type="text" class="form-control" name="nomor" required placeholder="Masukkan Nomor Handphone Pemesan">
            </div>
            <div class="form-group">
                <label>Email Pemesan</label>
                <input type="email" class="form-control" name="email" required placeholder="Masukkan Email Pemesan">
            </div>
            
            <button type="submit" name="submit" class="btn btn-warning">PESAN</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script>
        function updateHarga() {
            var select = document.getElementById("barang");
            var harga = select.options[select.selectedIndex].getAttribute("data-harga");
            document.getElementById("harga").value = harga;
        }
    </script>
</body>
</html>
