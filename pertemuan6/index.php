<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Sertakan Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <?php
    // Memulai session
    session_start();

    // Cek apakah pengguna sudah masuk
    if (isset($_SESSION['username'])) {
        echo "Selamat datang, " . $_SESSION['username'] . "!";
        echo "<br><a href='logout.php'>Keluar</a>";
        } else {
        // Tulisan "Halaman Login" menggunakan tag <h2> untuk memperbesar
        echo "<div class='text-center'>"; // Membuat div dengan posisi di tengah
        echo "<br>";
        echo "<h2>Halaman Login</h2>";
        echo "<form action='login.php' method='post' class='form'>";
        echo "<div class='form-group row'>";
        echo "<label for='username' class='col-sm-2 col-form-label'>Username</label>";
        echo "<div class='col-sm-10'>";
        echo "<input type='text' class='form-control' id='username' name='username' placeholder='Username'>";
        echo "</div>";
        echo "</div>";
        echo "<div class='form-group row'>";
        echo "<label for='password' class='col-sm-2 col-form-label'>Password</label>";
        echo "<div class='col-sm-10'>";
        echo "<input type='password' class='form-control' id='password' name='password' placeholder='Password'>";
        echo "</div>";
        echo "</div>";
        echo "<div class='form-group row'>";
        echo "<div class='col-sm-10 offset-sm-2'>";
        echo "<button type='submit' class='btn btn-primary'>Login</button>";
        echo "</div>";
        echo "</div>";
        echo "</form>";
        echo "</div>"; // Menutup div
        }

        // Mengambil data dari cookies
        if (isset($_COOKIE['last_visit'])) {
        $lastVisit = $_COOKIE['last_visit'];
        echo "<br>Anda mengunjungi halaman ini terakhir kali pada: " .
        $lastVisit;
        } else {
        echo "<br>Selamat datang di website Hijati";
        }

        // Menampilkan form upload file
        echo "<br><br>Upload file:";
        echo "<form action='upload.php' method='post'
        enctype='multipart/form-data'>";
        echo "<input type='file' name='file'>";
        echo "<input type='submit' value='Upload'>";
        echo "</form>";
    ?>
  </div>

  <!-- Sertakan Bootstrap JavaScript (opsional, tergantung kebutuhan Anda) -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


