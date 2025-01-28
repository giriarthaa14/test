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
    <link rel="stylesheet" href="list.css"/>
  </head>
  <body>
    <header class="header">
      <nav class="navbar">
      <div class="logo"><img src="../asset/logo.png" alt=""></div>
        <div class="name"><h3>excellent</h3></div>
        </label>
        <ul class="links">
        <li><a href="../home/home.php">Home</a></li>
          <li><a href="../home/#about">About Us</a></li>
          <li><a href="../home/#product">Product</a></li>
          <li class="dropdown">
      <a href="#">Services</a>
      <ul class="dropdown-content">
        <li><a href="../video/video.php">Video</a></li>
        <li><a href="list.php">List</a></li>
        <li><a href="../files/buattext.php">Files</a></li>
      </ul>
    </li>
        </ul>
        <div class="buttons">
          <a href="../login/logout.php" class="logout">Logout</a>
        </div>
      </nav>
   

      <div class="wrapper">
        <form method="POST">
            <h1>Masukan Angka (Dengan koma)</h1>
            <div class="input-box">
                <input type="text" placeholder="Masukan angka (berisi koma)" name="angka" id="input" required>
            </div>
           <div class="btn">
           <button type="submit" class="btn1" name="submit">Sorting</button>
           <button class="btn1" onClick="window.location.href=window.location.href">Reset</button>
           </div>
        </form>
      
        <?php
    if(isset($_POST['submit'])){
        // Mendapatkan deret angka dari input pengguna
        $input_numbers = $_POST['angka'];

        // Memisahkan deret angka menjadi array
        $numbers_array = explode(",", $input_numbers);


        // Mengurutkan array secara menaik (ascending)
        $ascending_order = $numbers_array;
        sort($ascending_order);

        // Mengurutkan array secara menurun (descending)
        $descending_order = $numbers_array;
        rsort($descending_order);

      

        // Menampilkan hasil
        echo "<h3>Hasil Pengurutan:</h3>";
        echo "<p>Ascending: " . implode(", ", $ascending_order) . "</p>";
        echo "<p>Descending: " . implode(", ", $descending_order) . "</p>";
    }

  
    ?>
    </div>
  </body>
</html>