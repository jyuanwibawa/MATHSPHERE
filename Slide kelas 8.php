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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MathPhrase - Pembelajaran Matematika</title>
    <link rel="stylesheet" href="css/style_slide_kelas.css" />
  </head>
  <body>
    <style>@import url('https://fonts.cdnfonts.com/css/marykate');</style>
    <nav>
      <div class="Header"
          <div class="wrapper">
              <div class="logo"><img src="logo mathsphere.png" height="50"></div>
              <div class="menu">
                <ul>
                    <li><a href="Slide Home.php">Home</a></li>
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

    <div class="kelas-container">
      <a href="Slide kelas 7.php"class="tbl-blue">Kelas 7</a>
      <a href="Slide kelas 8.php"class="tbl-blue">Kelas 8</a>
      <a href="Slide kelas 9.php"class="tbl-blue">Kelas 9</a>
    </div>

    <div class="materi-container">
      <div class="alat-tulis top-left"></div>
      <div class="alat-tulis top-right"></div>
      <div class="alat-tulis bottom-left"></div>
      <div class="alat-tulis bottom-right"></div>

      <div class="materi-card">
        <img src="bilangan.jpg" alt="Bilangan Berpangkat" />
        <h2>Bilangan Berpangkat</h2>
        <a href="Slide pilihan sumber belajar.php">Pelajari Sekarang</a>
      </div>

      <div class="materi-card">
        <img src="pythagoras.jpg" alt="Teorema Pythagoras" />
        <h2>Teorema Pythagoras</h2>
        <a href="Slide pilihan sumber belajar.php">Pelajari Sekarang</a>
      </div>

      <div class="materi-card">
        <img src="PLSV.jpg" alt="PLSV dan PTLSV" />
        <h2>PLSV dan PTLSV</h2>
        <a href="Slide pilihan sumber belajar.php">Pelajari Sekarang</a>
      </div>

      <div class="materi-card">
        <img src="relasi.jpg" alt="Relasi dan Fungsi" />
        <h2>Relasi dan Fungsi</h2>
        <a href="Slide pilihan sumber belajar.php">Pelajari Sekarang</a>
      </div>

      <div class="materi-card">
        <img src="persamaan.jpg" alt="Persamaan Garis Lurus" />
        <h2>Persamaan Garis Lurus</h2>
        <a href="Slide pilihan sumber belajar.php">Pelajari Sekarang</a>
      </div>

      <div class="materi-card">
        <img src="statistika.jpg" alt="Statistika" />
        <h2>Statistika</h2>
        <a href="Slide pilihan sumber belajar.php">Pelajari Sekarang</a>
      </div>
    </div>
  </body>
</html>
