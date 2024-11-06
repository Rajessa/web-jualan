<?php
$kon = mysqli_connect("localhost", "root", "", "db_jualan");

if (mysqli_connect_errno()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Hapus atau komentari fungsi query() di koneksi.php
// function query($query) {
//     global $kon;
//     $result = mysqli_query($kon, $query);
//     $rows = [];
//     while ($row = mysqli_fetch_assoc($result)) {
//         $rows[] = $row;
//     }
//     return $rows;
// }


function tambah($data) {
    global $kon;

    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $nomor = htmlspecialchars($data["nomor"]);
    $email = htmlspecialchars($data["email"]);
    $gambar = htmlspecialchars($data["gambar"]);
    $barang = htmlspecialchars($data["barang"]);
    $harga = htmlspecialchars($data["harga"]);

    $query = "INSERT INTO baju (nama, alamat, nomor, email, gambar, barang, harga)
              VALUES ('$nama', '$alamat', '$nomor', '$email', '$gambar', '$barang', '$harga')";

    mysqli_query($kon, $query);

    return mysqli_affected_rows($kon);
}

function hapus($id) {
    global $kon;
    mysqli_query($kon, "DELETE FROM baju WHERE id = $id");

    return mysqli_affected_rows($kon);
}

function ubah($data) {
    global $kon;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $nomor = htmlspecialchars($data["nomor"]);
    $email = htmlspecialchars($data["email"]);
    $gambar = htmlspecialchars($data["gambar"]);
    $barang = htmlspecialchars($data["barang"]);
    $harga = htmlspecialchars($data["harga"]);

    $query = "UPDATE baju SET 
                nama = '$nama', 
                alamat = '$alamat', 
                nomor = '$nomor', 
                email = '$email', 
                gambar = '$gambar', 
                barang = '$barang', 
                harga = '$harga' 
              WHERE id = $id";

    mysqli_query($kon, $query);

    return mysqli_affected_rows($kon);
}

function cari($keyword) {
    $query = "SELECT * FROM baju
              WHERE nama LIKE '%$keyword%' 
                 OR alamat LIKE '%$keyword%' 
                 OR nomor LIKE '%$keyword%' 
                 OR email LIKE '%$keyword%' 
                 OR gambar LIKE '%$keyword%' 
                 OR barang LIKE '%$keyword%' 
                 OR harga LIKE '%$keyword%'";

    return query($query);
}
?>
