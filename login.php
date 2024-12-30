<?php
// Mulai session untuk mengelola login
session_start();

// Hardcoded username dan password yang di-hash untuk tujuan demo
// Di aplikasi nyata, password ini harus disimpan di database dengan hash
$correct_username = 'admin';
$hashed_password = password_hash('password123', PASSWORD_DEFAULT); // Password yang di-hash

// Cek apakah form login sudah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil username dan password dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifikasi username dan password
    if ($username === $correct_username && password_verify($password, $hashed_password)) {
        // Set session untuk menandai bahwa pengguna sudah login
        $_SESSION['username'] = $username;

        // Jika login berhasil, arahkan ke halaman dashboard
        header("Location: dashboard.php");
        exit;
    } else {
        // Jika login gagal
        echo "Username atau password salah!";
    }
}
?>
