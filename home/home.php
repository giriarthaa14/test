<?php
session_start();
if (!isset($_SESSION['username'])){
  header('location:../login/login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>excellent</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="../asset/logo.png" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="script.js"></script>
  </head>
  <body>
    <div class="cookie-banner" id="cookie-banner">
        <p>
            This website uses cookies to ensure you get the best experience on our website. 
            Read our <a href="https://www.convatec.com/id-id/cookie-policy/">Cookie Policy</a> to find out more.
        </p>
        <div class="cookie-buttons">
            <button class="settings" onclick="handleCookieAction('settings')">Cookie Settings</button>
            <button class="reject" onclick="handleCookieAction('reject')">Reject All</button>
            <button class="accept" onclick="handleCookieAction('accept')">Accept All</button>
        </div>
    </div>
</body>
  <body>
    <header class="header">
      <nav class="navbar">
        <div class="logo"><img src="../asset/logo.png" alt="" >
        </div> 
        <input type="checkbox" id="menu-toggle" />
        <label for="menu-toggle" id="hamburger-btn">
        ☰
        </label>
        <ul class="links">
          <li><a href="excellent.php">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#product">Product</a></li>
          <li class="dropdown">
      <a href="#">Services</a>
      <ul class="dropdown-content">
        <li><a href="../video/video.php">Video</a></li>
        <li><a href="../list/list.php">List</a></li>
        <li><a href="../files/buattext.php">Files</a></li>
      </ul>
    </li>
</ul>
            <div class="navbar-right">
            <div class="search-box">
                <img src="https://img.icons8.com/ios-glyphs/30/search--v1.png" alt="Search Icon">
                <input type="text" placeholder="Search">
            </div>
            </div>
            <div class="navbar-icons">
            <div class="navbar-icons-heart">
                <i class="fa fa-heart" alt="Favorites Icon"></i>
            </div>
            <div class="navbar-icons-cart">
                <i class="fa fa-shopping-cart" alt="Cart Icon"></i>
            </div>
        <div class="buttons">
          <a href="../login/logout.php" class="logout">Logout</a>
        </div>
</div>
      </nav>
    </header>
    <div class="hero-slider">
    <div class="slides" id="slides">
        <img src="../asset/k.png" alt="Slide 1">
        <img src="../asset/s2.jpg" alt="Slide 2">
        <img src="../asset/s3.jpg" alt="Slide 3">
    </div>
    <div class="slider-buttons">
        <button id="prev">&lt;</button>
        <button id="next">&gt;</button>
    </div>
</div>
</head>
    <section class="hero-section">
      <div class="hero">
        <h2>Toko Distro Terbaik Di Indonesia</h2>
        <p>
        Temukan inspirasi di setiap langkah saat kita menjelajahi dunia bersama dalam petualangan yang tak terlupakan
        </p>
        <div class="buttons">      
          <a href="../product/product.php" class="more">More</a>
        </div>
      </div>
      <div class="img">
        <img src="../asset/sk1.png" alt="">
      </div>
    </section>

    <!-- about us -->
    <section class="hero-section" id="about">
      <div class="hero">
        <h2>excellent</h2>
        <p>
        Selamat datang di store kami yaitu excellent, destimasi utama untuk barang branded. 
        Seperti hoodie, snapback, trousers premium. Kami menyediakan koleksi pilihan yang memadukan 
        gaya modern dan kualitas terbaik. Dengan layanan ramah dan profesional, kami siap memenuhi kebutuhan fashion kamu.
        Pilih Excellent, karena di sini semuanya benar-benar bagus sekali!
      </div>
      <div class="img">
        <img src="../asset/logo.png" alt="">
      </div>
    </section> 
     <div class="img1">
        <img src="../asset/p.jpg" alt="">
        <img src="../asset/l.jpg" alt="">
        <img src="../asset/m.jpg" alt="">
      </div>

    <!-- product -->
    <div class="container" id="product">

    <h3 class="title"> Our Hoodie </h3>

    <div class="products-container">

      <div class="product">
         <img src="../asset/hoodie1.png" alt="">
         <h3>Fear of God Essentials Black SS20</h3>
         <div class="price">Rp. 1.931.500</div>
      </div>

      <div class="product">
         <img src="../asset/hoodie2.png" alt="">
         <h3>GG Wool Hoodie Sweat Shirt</h3>
         <div class="price">Rp. 4.935.000</div>
      </div>

      <div class="product">
         <img src="../asset/hoodie3.png" alt="">
         <h3>Drew House Purple</h3>
         <div class="price">Rp. Rp2.790.000</div>
      </div>

      <div class="product">
         <img src="../asset/hoodie4.png" alt="">
         <h3>New York Hoodie Light Grey</h3>
         <div class="price">Rp. 1.599.100</div>
      </div>
    </div>
      </div>
      <div class="img1">
        <img src="../asset/sk1.jpg" alt="">
        <img src="../asset/sk2.jpg" alt="">
        <img src="../asset/sk3.jpg" alt="">
      </div>
<div class="container">

   <h3 class="title"> Our SnapBack </h3>

   <div class="products-container">

      <div class="product">
         <img src="../asset/sb1.png" alt="">
         <h3>59FIFTY New Era Cap Black</h3>
         <div class="price">Rp. 1.562.000</div>
      </div>

      <div class="product">
         <img src="../asset/sb2.png" alt="">
         <h3>59FIFTY New Era Chicago Bulls</h3>
         <div class="price">Rp. 712.620</div>
      </div>

      <div class="product">
         <img src="../asset/sb3.png" alt="">
         <h3>59FIFTY New Era Cap Los Angeles Lakers Champions 2020</h3>
         <div class="price">Rp. 792.540</div>
      </div>

      <div class="product">
         <img src="../asset/sb4.png" alt="">
         <h3>59FIFTY New Era World Series 1981 LA Dodgers</h3>
         <div class="price">Rp. 486.050</div>
      </div>
   </div>
</div>
<div class="info-banner">
  <div class="info-item">
    <i class="fa fa-tag"></i>
    <div>
      <h4>Flash Sale setiap hari</h4>
      <p>Dapatkan diskon menarik setiap hari</p>
    </div>
  </div>
  <div class="info-item">
    <i class="fa fa-truck"></i>
    <div>
      <h4>Extra Voucher & Gratis Ongkir</h4>
      <p>Syarat dan ketentuan berlaku</p>
    </div>
  </div>
  <div class="info-item">
    <i class="fa fa-headset"></i>
    <div>
      <h4>Customer Service 24 Jam</h4>
      <p>Kami siap menjawab keluhan kamu 24/7</p>
    </div>
  </div>
</div>
<footer class="footer">
    <div class="footer-container">
        <!-- Contact Information -->
        <div class="footer-section contact-info">
            <h4>Contact</h4>
            <div class="contact-item">
                <i class="fas fa-map-marker-alt"></i>
                <p>21 Revolution Street<br>Denpasar, Bali</p>
            </div>
            <div class="contact-item">
                <i class="fas fa-phone-alt"></i>
                <p>+62 555 123456</p>
            </div>
            <div class="contact-item">
                <i class="fas fa-envelope"></i>
                <a href="mailto:support@company.com">support@company.com</a>
            </div>
        </div>
        <!-- Company Section -->
        <div class="footer-section">
            <h4>Company</h4>
            <ul>
                <li><a href="#">About us</a></li>
                <li><a href="#">Our Services</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Affillate Program</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>
        </div>
        <!-- Further Information Section -->
        <div class="footer-section">
            <h4>Get Help</h4>
            <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Shipping</a></li>
                <li><a href="#">Returns</a></li>
                <li><a href="#">Order Status</a></li>
                <li><a href="#">Payment Options</a></li>
            </ul>
        </div>
         <!-- Customers Section -->
         <div class="footer-section">
            <h4>Online Shop</h4>
            <ul>
                <li><a href="#">Hoodie</a></li>
                <li><a href="#">SnapBack</a></li>
            </ul>
        </div>
        <!-- Follow Us Section -->
        <div class="footer-section follow-us">
            <h4>Follow us</h4>
            <div style="display: flex; gap: 10px; align-items: center; margin-top: 0px; margin-left: 0px">
                <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
            </a>
                <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
            </a>
                <a href="#" class="social-icon">
                <i class="fab fa-instagram"></i>
            </a>
                <a href="#" class="social-icon">
                <i class="fab fa-telegram-plane"></i>
            </a>
          </div>
      </div>
    </div>
        <!-- Copyright Section -->
        <div class="footer-copyright">
        &copy; 2025, Excellent. Indonesia. All rights reserved.
    </div>
</footer>
</body>
</html>
