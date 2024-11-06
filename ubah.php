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
<?php
require 'koneksi.php';


$id = $_GET["id"];

$lap = query("SELECT * FROM baju WHERE id = $id")[0];


if (isset($_POST['submit']) ) {



    if(ubah($_POST) > 0 ) {
        echo "
            <script>
        alert('DATA BERHASIL DIUBAH');
            document.location.href = 'database.php'
        </script>
        "; 
    } else {
        echo "
            <script>
        alert('DATA GAGAL DIUBAH');
            document.location.href = 'database.php'
        </script>
        ";
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   <title>UBAH BOOKING</title>  
    
  </head>
  <body>
    <div class="p-3 mb-2 bg-dark text-warning text-center">
    <h1>UBAH DATA PELANGGAN</h1>

 <form action="" method="post" role="form">
    <input type="hidden" name="id" value="<?= $lap["id"]; ?>">
        <div class="form-group">
            <div class="row">
                <label class="col-sm-3 control-label">Nama Pelanggan</label>
                <div class="col-sm-8"><input type="text" class="form-control" name="nama" required="" placeholder="Masukkan Nama Pelanggan" value="<?= $lap["nama"] ?>"></div>
            </div>
            <div class="row">
                <label class="col-sm-3 control-label">Alamat Pelanggan</label>
                <div class="col-sm-8"><input type="text" class="form-control" name="alamat" required="" placeholder="Masukkan Alamat Pelanggan" value="<?= $lap["alamat"] ?>"></div>
        </div>
        <div class="row">
                <label class="col-sm-3 control-label">Nomor Handphone Pelanggan</label>
                <div class="col-sm-8"><input type="text" class="form-control" name="nomor" required="" placeholder="Masukkan Nomor Handphone Pelanggan" value="<?= $lap["nomor"] ?>"></div>
            </div>
        <div class="form-group">
            <div class="row">
                <label class="col-sm-3 control-label ">Alamat Email Pelanggan</label>
                <div class="col-sm-8"><input type="text" class="form-control" name="email"  required="" placeholder="Masukkan Alamat Email Pelanggan" value="<?= $lap["email"] ?>"></div>
            </div>
            <div class="row">
                <label class="col-sm-3 control-label">Gambar Barang </label>
                <div class="col-sm-8"><input type="file" class="form-control" name="gambar" required="" placeholder="Masukkan Gambar" value="<?= $lap["gambar"] ?>"></div>
            </div>
        <div class="form-group">
            <div class="row">
                <label class="col-sm-3 control-label ">Nama Barang</label>
                <div class="col-sm-8"><input type="text" class="form-control" name="barang"  required="" placeholder="Masukkan Nama Barang" value="<?= $lap["barang"] ?>"></div>
            </div>
        <div class="form-group">
            <div class="row">
                <label class="col-sm-3 control-label ">Harga Barang</label>
                <div class="col-sm-8"><input type="text" class="form-control" name="harga"  required="" placeholder="Masukkan Alamat Email Pelanggan" value="<?= $lap["harga"] ?>"></div>
            </div>
        <div class="modal-footer">
            <button id="nosave" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button>
            <input type="submit" name="submit" class="btn btn-warning" value="Simpan">
        </div>
        </div>
    </div>
    </form>


    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>