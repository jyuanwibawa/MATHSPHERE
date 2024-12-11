<?php
session_start();
include('config.php'); // Memasukkan file koneksi database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk mengambil data pengguna berdasarkan username
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc(); // Mengambil data pengguna
        // Memeriksa apakah password cocok
        if (password_verify($password, $user['password'])) {
            // Set session dan arahkan ke halaman beranda
            $_SESSION['username'] = $user['username'];
            header('Location: Slide Home.html'); // Halaman beranda setelah login
            exit();
        } else {
            echo "Password salah!";
        }
    } else {
        echo "Username tidak ditemukan!";
    }
}
?>
