<?php
session_start();


if (!isset($_SESSION['username'])) {
    header('Location: Slide Login.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathsphere</title>
    <link rel="stylesheet" href="css/style_slide_video.css">
</head>
<body>
    <style>
        @import url('https://fonts.cdnfonts.com/css/marykate');
        @import url('https://fonts.cdnfonts.com/css/lazydog');
        @import url('https://fonts.cdnfonts.com/css/schoolbell');
    </style>
    <nav>
        <div class="Header"
        <div class="wrapper">
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
        </div>
    </nav>
    <div class="video-container">
        <iframe width="560" height="315" 
            src="https://www.youtube.com/embed/j3-vxTMQlXM?autoplay=0" 
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
        </iframe>
    </div>

    <div class="video-description">
        <h2>Video Title</h2>
        <p>deskripsi singkat video pembelajaran!</p>
    </div>
</body>
</html>