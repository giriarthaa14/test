<?php
session_start();
if (!isset($_SESSION['username'])){
  header('location:../login/login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>excellent</title>
    <link rel="stylesheet" href="video.css" />
</head>
<body>
<header class="header">
      <nav class="navbar">
      <div class="logo"><img src="../asset/logo.png" alt=""></div>
        <div class="name"><h3>excellent</h3></div>
        </label>
        <ul class="links">
        <li><a href="../home/excellent.php">Home</a></li>
          <li><a href="../home/excellent.php">About Us</a></li>
          <li><a href="../home/excellent.php">Product</a></li>
          <li class="dropdown">
      <a href="#">Services</a>
      <ul class="dropdown-content">
        <li><a href="video.php">Video</a></li>
        <li><a href="../list/list.php">List</a></li>
        <li><a href="../files/buattext.php">Files</a></li>
      </ul>
    </li>
        </ul>
        <div class="buttons">
          <a href="../login/logout.php" class="logout">Logout</a>
        </div>
      </nav>
    </header>

    <section class="hero-section">
    <div class="img">
      <video controls autoplay >
        <source src="../video/Essentials Video.mp4" type="video/mp4">
      </video>
      </div>
      <div class="hero">
        <h2>Essentials</h2>
        <p>
        Essentials adalah sub-brand dari Fear of God, label fashion terkenal yang didirikan oleh Jerry Lorenzo. Essentials fokus pada koleksi pakaian kasual yang minimalis dan fungsional, dengan harga yang lebih terjangkau dibandingkan lini utama Fear of God. Hoodie Essentials adalah salah satu produk paling populer dari sub-brand ini.        </p>
        <div class="buttons">      
          <a href="../product/product.php" class="more">More</a>
        </div>
      </div>
    </section>

    <!-- hero section 2 -->

    <section class="hero-section1">
      <div class="hero1">
        <h2>Drew House</h2>
        <p>
        Drew adalah merek pakaian yang dimiliki oleh Justin Bieber bersama mitra bisnisnya, Ryan Good, Justin Bieber adalah seorang penyanyi dan ikon pop terkenal. Nama merek ini diambil dari nama tengah Justin Bieber, yaitu Drew. Brand ini dikenal dengan nama lengkapnya, Drew House, dan didirikan pada tahun 2019. Drew House memiliki konsep unik yang mengusung gaya kasual, oversized, dan santai, cocok untuk generasi muda yang menyukai kenyamanan sekaligus ingin tampil stylish.        </p>
        <div class="buttons1">      
          <a href="../product/product.php" class="more1">More</a>
        </div>
      </div>
      <div class="img1">
      <video controls autoplay >
        <source src="../video/video1.mp4" type="video/mp4">
      </video>
      </div>
    </section>
   
</body>
</html>