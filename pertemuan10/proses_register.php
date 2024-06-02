<?php
// Cek apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lakukan operasi penyimpanan data ke database
    require_once('connect.php');

    $nama_lengkap = $_POST['nama_lengkap'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query untuk menyimpan data pengguna baru ke tabel pengguna
    // Buat query untuk memasukan data user yang tadi diinputkan
    $query = "SELECT email FROM user WHERE email = '$email'";
    $res = $conn->query($query);
    if ($res->num_rows == 0) {
        $query = "INSERT INTO user (nama_lengkap,no_hp,email,password)
    values('$nama_lengkap','$no_hp','$email','$password')";
        if ($conn->query($query) === TRUE) {
            header("Location: login.php");
            exit();
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
    } else {
        echo "Email sudah terdaftar " . $conn->error;
    }

    // Tutup koneksi database
    $conn->close();
}
