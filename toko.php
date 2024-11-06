<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_jualan";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "SELECT * FROM produk";
$result = $conn->query($sql);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="stylee.css">
    <title>EIGER</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">EIGER SHOP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index2.php">ABOUT EIGER <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="login.php">LOGOUT <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <div class="row mt-5 no-gutters">
      <div class="col-md-2 bg-light">
        <ul class="list-group list-group-flush p-2 pt-4">
          <li class="list-group-item bg-warning">KATEGORI</li>
          <li class="list-group-item"><a href="#baju">BAJU</a></li>
          <li class="list-group-item"><a href="#jaket">JAKET</a></li>
          <li class="list-group-item"><a href="#celana">CELANA</a></li>
          <li class="list-group-item"><a href="#sepatu">SEPATU</a></li>
        </ul>
      </div>

      <div class="col-md-10">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="gambar/logo5.jpg" class="d-block w-30" alt="...">
            </div>
            <div class="carousel-item">
              <img src="gambar/logo6.jpg" class="d-block w-30" alt="...">
            </div>
            <div class="carousel-item">
              <img src="gambar/logo5.jpg" class="d-block w-30" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <?php if ($result->num_rows > 0): ?>
          <h4 class="text font-weight-bold m-4" id="baju">STOCK BAJU</h4>
          <div class="row mx-auto">
          <?php while($row = $result->fetch_assoc()): ?>
  <div class="card mr-2 m1-2" style="width: 16rem;">
    <img src="<?php echo $row['image_url']; ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php echo $row['nama']; ?></h5>
      <p class="card-text">HARGA RP.<?php echo number_format($row['harga'], 2, ',', '.'); ?></p>
      <a href="tambah.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">PESAN</a>
    </div>
  </div>
<?php endwhile; ?>

          </div>
        <?php else: ?>
          <p>Belum ada produk tersedia.</p>
        <?php endif; ?>

        <?php $conn->close(); ?>
      </div>
    </div>

    <footer class="bg-dark text-white p-5">
      <div class="row">
        <div class="col-md-3">
          <h5>LAYANAN PELANGGAN</h5>
          <ul>
            <li><a href="#">Pusat Bantuan</a></li>
            <li><a href="#">Cara Pembelian</a></li>
            <li><a href="#">Pengiriman</a></li>
            <li><a href="#">Kebijakan Produk Internasional</a></li>
            <li><a href="#">Cara Pengembalian</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>TENTANG KAMI</h5>
          <p>Eiger Shop adalah toko retail yang menyediakan produk-produk berkualitas tinggi yang didesain untuk memenuhi kebutuhan pecinta aktivitas outdoor.</p>
        </div>
        <div class="col-md-3">
          <h5>MITRA KERJA SAMA</h5>
          <ul>
            <li><a href="#">JNE</a></li>
            <li><a href="#">JNT</a></li>
            <li><a href="#">POS Indonesia</a></li>
            <li><a href="#">TIKI</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>HUBUNGI KAMI</h5>
          <p>Alamat: Jl. Contoh Alamat No.123, Kota Contoh</p>
          <p>Email: contoh@eiger.com</p>
          <p>Telepon: (021) 12345678</p>
        </div>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
  </body>
</html>
