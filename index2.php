<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>EIGER</title>
    <style type="text/css">
    body{
        background-image: url(gambar/logo.jpg);
    }
    .teks{
        font-family: lucida ;
    }
    </style>
  </head>
  <body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
  <a class="navbar-brand" href="#">EIGER</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="index.php">HOME  <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="toko.php">PEMESANAN</a>
      <!doctype html>
      <html lang="en">
        <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
              </a>
              <a class="nav-link active" href="logout.php">LOGOUT <span class="sr-only">(current)</span></a>

    </div>
  </div>
  </div>
</nav>
<div class="alert alert-success" role="alert">
 <center> SELAMAT DATANG DI TOKO EIGER</center>
</div>
  <div class="container text-center text-light bg-dark">
  <center><h1 class="display-4">SELAMAT DATANG PEMBELI</h1></center>
  </div>
</div>
<div class="container">
<div class="row mb-4">
<div class="col text-center text-light bg-dark">
<h1>ABOUT EIGER</h1>
</div>
<div class="row mb-4">
<div class="col text-center text-light bg-dark">
<p>EIGER
diluncurkan pertama kali pada tahun 1989 sebagai produk untuk memenuhi berbagai kebutuhan perlengkapan dan peralatan bagi gaya hidup para penggiat alam terbuka. Nama EIGER sendiri terinspirasi dari Gunung Eiger berketinggian 3.970 mdpl dan menjadi “gunung tersulit didaki” ke-3 di dunia yang terletak di Bernese Alps, Swiss. Kini, EIGER menyediakan tiga kategori produk utama, yaitu Mountaineering yang berorientasi pada kegiatan pendakian gunung; Riding yang berfokus pada penjelajahan sepeda motor; serta Authentic 1989 yang diinspirasi dari gaya klasik para pencinta kegiatan petualangan alam terbuka yang diwujudkan dalam desain yang kasual dan stylish. Mengacu pada landasan visi dan misinya, EIGER tidak hanya memberikan kontribusi pada kegiatan luar ruang, namun turut memberikan perhatian yang besar terhadap kelestarian lingkungan demi mewujudkan misi yang meliputi aspek Education, Inspiration, Greenlife, Expedition, dan Responsibility. Hingga saat ini, EIGER telah memiliki jaringan distribusi di seluruh Indonesia dan akan terus memperluas jangkauannya hingga ke mancanegara.</p>
</div>
</div>
<div class="row mb-4 ">
<div class="col">
<div class="card">

  <img class="card-img-top" src="gambar/baju.jpg" alt="Card image cap">
  </section>
  </div>
</div>
<div class="col">
<div class="card">
  <img class="card-img-top" src="gambar/logo2.jpg" alt="Card image cap">
 
  </div>
</div>
</div>
</div>
</section>

  
<div class="row justify-content-center bg-light">
    <div class="colom-lg-4">
      <div class="card text-white bg-primary bg-light mb-3 text-center">  
        <div class="card-body bg-dark">
          <h5 class="card-title text-white ">KOLOM KOMENTAR</h5>
            <p class="card-text text-white">SILAHKAN BERKOMENTAR PADA KOLOM YANG SUDAH DISEDIAKAN</p>
      </div>
    </div>
    <ul class="list-group">
  <li class="list-group-item active bg-dark text-light text-center"><h1>ALAMAT EIGER</h1></li>
  <li class="list-group-item active bg-dark text-light text-center">Jl h Nurisan RT01/RW011 No 19</li>
  <li class="list-group-item active bg-dark text-light text-center">Kebayoran Lama,Jakarta Selatan</li>
  <li class="list-group-item active bg-dark text-light text-center">No Telepon : 081385283943</li>
  <li class="list-group-item active bg-dark text-light text-center">Email : ray.rajessa@gmail.com</li>
  </ul>
    </div>
  <div class="col-lg-6">
  <form action="" method="get">
      <div class="form-group">
      <label for="nama">Nama Anda :</label>
      <input type="text" class="form-control" id="nama">
      </div>
      <div class="form-group">
      <label for="email">Email Anda :</label>
      <input type="text" class="form-control" id="email">
      </div>
  <div class="card my-4"
      <h5 class="card-header">Beri Komentar:</5>
      <div class="card-body">
        <form action="" method="get">
          <div class="form-group">
        <textarea class="form-control" rows="3" name="pesan"></textarea>
    </div>
      <button type="submit" class="btn btn-danger">kirim</button><br>
    </br>
    <div class="output" align="left">
      <div class="form-group">
        <textarea class="form-control" rows="3">
          <?php
            echo $_GET["pesan"];
            ?>

    </textarea>
    </div>
    </div>
    </form>
    </div>
    </div>




           

 


   
   
  </body>
</html>