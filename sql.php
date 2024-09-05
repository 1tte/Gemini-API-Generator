<?php
$servername = "192.168.209.215";
$database = "pmbuny";
$username = "elaporan";
$password = "UNYregtik54321";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} 
echo "Berhasil terhubung ke database";
?>
