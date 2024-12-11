<?php
session_start();


if (!isset($_SESSION['username'])) {
    header('Location: Slide Login.html');
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Mathsphere.com</title>
    <link rel="Stylesheet" href="style slide home.css"
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <style>
        @import url('https://fonts.cdnfonts.com/css/marykate');
        @import url('https://fonts.cdnfonts.com/css/schoolbell');
        @import url('https://fonts.cdnfonts.com/css/lexend');
        @import url('https://fonts.cdnfonts.com/css/glory-2');
    </style>
    <nav>
        <div class="Header"
            <div class="wrapper">
            <div class="logo"><img src="logo mathsphere.png" height="50"></div>
            <div class="menu">
                <ul>
                    <li><a href="Slide Home.php">Home</a></li>
                    <li><a href="#kelas">Kelas</a></li>
                    <li><a href="#kontak">Footer</a></li>
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
        </div>
    </nav>
    <div>
        <section id="Home">
            <div class="KataPengantar">
                <img src="Kata Pengantar.png" alt="katapengantar" class="responsive"">
            </div>
    </section>
</div>
<div>
        <section id="kelas">
                <div class="kelas">
                    <img src="pilih kelasmu.png" height="120">
                </div>
        </section>
    

      
        <div class="Iconkelas">
            <section>
                <a href="Slide kelas 7.php">
                    <img src="kelas 7.png" height="300">
                </a>
                <a href="Slide kelas 8.php">
                    <img src="kelas 8.png" height="300">
                </a>
                <a href="Slide kelas 9.php">
                    <img src="kelas 9.png" height="300">
                </a>
            </section>
        </div>
    </div>
    <div class="video">
        <section id="content2">
            <div id="slider">
                <ul>
                    <li><iframe width="480" height="310" src="https://www.youtube.com/embed/ASwt1k33YMY?autoplay=1&mute=1" alt="Slide 1"></iframe>
                    </li>
                </ul>
            </div>
        </section>
        <section id="content3">
            <ul>
                <li>
                    <h1>"Matematika, Ratu ilmu pengetahuan"</h1>
                    <p>- Carl Friedrich Gauss</p>
                </li>
            </ul>
        </section>
    </div>
    <div id="kontak">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3>The Creator</h3>
                    <p>Bella Pramudya Lestari</p>
                    <p>Rafidah Zulfah</p>
                    <p>Shinta Amalia</p>
                    <p>Cahyani Salsabila</p>
                </div>
                <div class="footer-section">
                    <h3>Institution</h3>
                    <p>Tadris Matematika</p>
                    <p>UIN Maulana Malik Ibrahim Malang</p>
                    <p>Jl. Gajayana No.5, Dinoyo, Lowokwaru, Kota Malang</p>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>Telp: +62-341 551-354</p>
                    <p>Email : info@uin-malang.ac.id</p>
                    <ul>
                        <a href="https://x.com/uinmlg?mx=2">
                            <img src="logo 1.png" height="35">
                        </a>
                        <a href="https://www.instagram.com/uinmlg/">
                            <img src="logo 2.png" height="35">
                        </a>
                        <a href="https://www.youtube.com/c/uinmlg">
                            <img src="logo 3.png" height="35">
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="copyright">
        <div class="wrapper">
            &copy; 2024. <b>Mathsphere</b> All Right Reserved.
        </div>
    </div>
</body>

</html>