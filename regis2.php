<?php
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = mysqli_real_escape_string($kon, $_POST['username']);
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $jabatan = mysqli_real_escape_string($kon, $_POST['jabatan']);

    $query = "INSERT INTO users (username, password, jabatan) VALUES ('$user', '$pass', '$jabatan')";
    $sql = mysqli_query($kon, $query);

    if ($sql) {
        echo "<script>
                alert('Akun berhasil dibuat!');
                window.location.href = 'login.php';
              </script>";
    } else {
        echo "<script>
                alert('Akun gagal dibuat!');
                window.location.href = 'regis.php';
              </script>";
    }
}
?>
