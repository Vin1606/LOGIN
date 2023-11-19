<?php
// Sambungkan ke database Anda
$mysqli = new mysqli("localhost", "root", "", "user_db");

// Periksa koneksi
if ($mysqli->connect_error) {
    die("Koneksi database gagal: " . $mysqli->connect_error);
}

// Ambil pesan dari database
$sql = "SELECT name, message, created_at FROM komentar ORDER BY created_at DESC";
$result = $mysqli->query($sql);

// Tampilkan pesan
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p><strong>" . $row["name"] . "</strong> (" . $row["created_at"] . "):";
        echo $row["message"] . "</p>";
    }
} else {
    echo "Belum ada pesan.";
}

// Tutup koneksi ke database
$mysqli->close();
