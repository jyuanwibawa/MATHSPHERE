<?php
session_start();


if (!isset($_SESSION['username'])) {
    header('Location: Slide Login.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Buku</title>
    <link rel="stylesheet" href="style slide buku.css">
</head>
<body>

    <style>
        @import url('https://fonts.cdnfonts.com/css/marykate');
    </style>

<nav>
    <section id="Header"
        <div class="container">
            <div class="logo"><img src="logo mathsphere.png" height="50"></div>
            <div class="menu">
                <ul>
                    <li><a href="Slide Home.php">Home</a></li>
                    <li><a href="Slide kelas 7.php">Materi</a></li>
                    <a href="">
                        <img src="logo pengguna.png" height="35">
                    </a>
                    <?php
                    if (isset($_SESSION['username'])) {
                        echo '<li>Hello, ' . htmlspecialchars($_SESSION['username']) . '!</li>';
                        echo '<li><a href="logout.php">Logout</a></li>';
                    } else {
                        echo '<li><a href="login.php">Login</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>    
    </section>    
</nav>
    <section>

        <div class="content">
            <div class="box">
                <h1>Jenjang Kelas / Pilihan Materi / Buku 1</h1>
                <style>
                    @import url('https://fonts.cdnfonts.com/css/labrada');
                </style>
            </div>
    </section>
    

    <div class="buku">
            <div class="pdf">
                <iframe src="Slide 1.pdf" width="720" height="480"></iframe>
            </div>
            <div class="note">
                <h2>Catatan</h2>
                <style>
                    @import url('https://fonts.cdnfonts.com/css/linemas');
                </style> 
            </div>
    </div>
</body>
</html>