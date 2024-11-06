<?php
// Sertakan file koneksi.php untuk mendapatkan koneksi ke database
require 'koneksi.php';

// Periksa apakah parameter id telah diterima melalui URL
if (isset($_GET['id'])) {
    // Ambil nilai id dari parameter URL
    $id = $_GET['id'];

    // Buat query untuk menghapus data berdasarkan id
    $query = "DELETE FROM pesanan WHERE id = ?";
    $stmt = $kon->prepare($query);
    $stmt->bind_param("i", $id);

    // Lakukan eksekusi query
    if ($stmt->execute()) {
        // Jika berhasil dihapus, arahkan kembali ke halaman database.php
        echo "<script>alert('Data berhasil dihapus.'); window.location.href = 'database.php';</script>";
        exit;
    } else {
        // Jika gagal dihapus, tampilkan pesan error
        echo "<script>alert('Gagal menghapus data.'); window.location.href = 'database.php';</script>";
        exit;
    }
} else {
    // Jika tidak ada parameter id, tampilkan pesan error atau arahkan ke halaman lain
    echo "<script>alert('ID tidak ditemukan.'); window.location.href = 'database.php';</script>";
    exit;
}
