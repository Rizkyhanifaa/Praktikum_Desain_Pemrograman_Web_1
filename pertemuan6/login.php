<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Tautan Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <?php
        // File: login.php
        // Memulai session
        session_start();
        // Cek apakah username dan password sesuai
        if ($_POST['username'] == 'Hanifa' && $_POST['password'] == 'hanifa') {
            // Menyimpan username dalam session
            $_SESSION['username'] = $_POST['username'];
            ?>
            <!-- Tampilkan pesan kesuksesan dengan gaya Bootstrap -->
            <div class="alert alert-success" role="alert">
                Selamat Datang, Anda berhasil masuk <a href="index.php" class="alert-link">Kembali ke halaman utama</a>.
            </div>
            <?php
        } else {
            ?>
            <!-- Tampilkan pesan kesalahan dengan gaya Bootstrap -->
            <div class="alert alert-danger" role="alert">
                Gagal masuk. Silakan coba lagi. <a href="index.php" class="alert-link">Kembali ke halaman masuk</a>.
            </div>
            <?php
        }
        ?>
    </div>

    <!-- Tautan Bootstrap JavaScript (opsional, tergantung kebutuhan Anda) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

