<?php
require 'koneksi.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nomor = $_POST['nomor'];
$email = $_POST['email'];
$barang = $_POST['barang'];
$harga = $_POST['harga'];

$query = "INSERT INTO baju (nama, alamat, nomor, email, barang, harga) VALUES ('$nama', '$alamat', '$nomor', '$email', '$barang', '$harga')";
$sql = mysqli_query($kon, $query);

if ($sql) {
    echo "<script>alert('Data berhasil disimpan'); window.location.href = 'toko.php';</script>";
} else {
    echo "<script>alert('Gagal menyimpan data');</script>";
}
?>
