<?php
// Sambungkan ke database Anda
$mysqli = new mysqli("localhost", "root", "", "user_db");

// Periksa koneksi
if ($mysqli->connect_error) {
    die("Koneksi database gagal: " . $mysqli->connect_error);
}

// Ambil data dari formulir
$name = $_POST['name'];
$message = $_POST['message'];

// Simpan pesan ke database
$sql = "INSERT INTO komentar (name, message) VALUES ('$name', '$message')";
if ($mysqli->query($sql) === TRUE) {
    echo include('index1.php');
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

// Tutup koneksi ke database
$mysqli->close();
