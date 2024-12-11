<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

 
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

    if ($conn->query($query) === TRUE) {
        echo "success";  
    } else {
        echo "Terjadi kesalahan saat mendaftar: " . $conn->error;  // Mengirim pesan error
    }
}
?>
