<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload File</title>
  <!-- Tautan Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <?php
    // Cek apakah file telah diupload
    if (isset($_FILES['file'])) {
        $file = $_FILES['file'];

        // Lokasi penyimpanan file
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($file['name']);

        // Pindahkan file ke lokasi penyimpanan
        if (move_uploaded_file($file['tmp_name'], $targetFile)) {
            // Pesan kesuksesan Bootstrap
            echo "<div class='alert alert-success' role='alert'>";
            echo "File berhasil diupload.";
            echo "</div>";
        } else {
            // Pesan kesalahan Bootstrap
            echo "<div class='alert alert-danger' role='alert'>";
            echo "Gagal mengupload file.";
            echo "</div>";
        }
    }
    ?>
  </div>

  <!-- Tautan Bootstrap JavaScript (opsional, tergantung kebutuhan Anda) -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

