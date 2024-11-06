<?php
session_start();

if (isset($_SESSION["login"])) {
    if ($_SESSION["jabatan"] === "admin") {
        header("Location: index.php");
    } else {
        header("Location: index2.php");
    }
    exit;
}

require "koneksi.php";

$error = false;
$blocked = false;

// Cek status blokir
if (isset($_SESSION['failed_attempts']) && $_SESSION['failed_attempts'] >= 3) {
    $remaining_block_time = $_SESSION['block_time'] - time();
    if ($remaining_block_time > 0) {
        $blocked = true;
        $block_message = "Anda telah diblokir selama 30 detik. Sisa waktu blokir: " . $remaining_block_time . " detik.";
    } else {
        // Reset setelah waktu blokir habis
        $_SESSION['failed_attempts'] = 0;
        unset($_SESSION['block_time']);
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !$blocked) {
    $username = mysqli_real_escape_string($kon, $_POST["username"]);
    $password = $_POST["password"];
    $result = mysqli_query($kon, "SELECT * FROM users WHERE username = '$username'");

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // Set session
            $_SESSION["login"] = true;
            $_SESSION["jabatan"] = $row["jabatan"];
            $_SESSION["username"] = $row["username"];
            
            // Redirect berdasarkan jabatan
            if ($row["jabatan"] === "admin") {
                header("Location: index.php");
            } else {
                header("Location: index2.php");
            }
            exit;
        } else {
            $error = true;
        }
    } else {
        $error = true;
    }

    // Jika gagal, tambahkan jumlah percobaan dan cek apakah harus diblokir
    if ($error) {
        if (!isset($_SESSION['failed_attempts'])) {
            $_SESSION['failed_attempts'] = 0;
        }
        $_SESSION['failed_attempts'] += 1;

        if ($_SESSION['failed_attempts'] >= 3) {
            $_SESSION['block_time'] = time() + 30; // Blokir selama 30 detik
            $blocked = true;
            $block_message = "Anda telah diblokir selama 30 detik.";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="stylee.css">
</head>
<body>
    <div class="kotak_login">
        <p class="tulisan_login">Silakan Login</p>
        <?php if ($blocked): ?>
            <div class="alert"><?= $block_message; ?></div>
        <?php elseif ($error): ?>
            <div class="alert">Username / Password salah!</div>
        <?php endif; ?>
        <form action="login.php" method="post">
            <label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="Username .." required>
            <label>Password</label>
            <input type="password" name="password" class="form_login" placeholder="Password .." required>
            <input type="submit" class="tombol_login" value="Login">
            <br><br>
            <center>
                <a class="link" href="regis.php">Daftar</a>
            </center>
        </form>
    </div>
</body>
</html>
