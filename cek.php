<?php
session_start();
include 'koneksi2.php';

$user = $_POST['username'];
$pass = $_POST['password'];

$stmt = $koneksi2->prepare("SELECT * FROM users WHERE username = ?");
$stmt->bind_param("s", $user);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();

if ($data) {
    if (password_verify($pass, $data['password'])) {
        $_SESSION['username'] = $user;
        $_SESSION['jabatan'] = $data['jabatan'];
        if ($data['jabatan'] == "admin") {
            header("location:index.php");
        } elseif ($data['jabatan'] == "user") {
            header("location:index2.php");
        }
    } else {
        header("location:login.php?pesan=gagal");
    }
} else {
    header("location:login.php?pesan=gagal");
}
?>
