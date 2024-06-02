<?php
$host = ''; // Nama host database
$username = 'root'; // Username database
$password = ''; // Password database
$database = 'pert9'; // Nama database
// Buat koneksi
$conn = new mysqli($host, $username, $password, $database);
// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
