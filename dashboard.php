<?php
// Mulai session untuk mengecek apakah pengguna sudah login
session_start();

// Pastikan pengguna sudah login
if (!isset($_SESSION['username'])) {
    header('Location: login.html'); // Jika tidak login, arahkan kembali ke halaman login
    exit;
}

// Menampilkan dashboard setelah login berhasil
echo "<h1>Welcome to the Dashboard, " . $_SESSION['username'] . "!</h1>";
?>
