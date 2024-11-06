<?php
session_start();

// Hapus semua sesi
$_SESSION = [];
session_unset();
session_destroy();

// Redirect ke halaman login
header("Location: login.php");
exit;
?>
