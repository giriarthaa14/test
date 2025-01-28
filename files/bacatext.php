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
    <link rel="stylesheet" href="bacatext.css" />
  </head>
  <body>
    <header class="header">
      <nav class="navbar">
      <div class="logo"><img src="../asset/logo.png" alt="">
          <h3>excellent</h3>
        </div>
        <ul class="links">
        <li><a href="../home/home.php">Home</a></li>
          <li><a href="../home/#about">About Us</a></li>
          <li><a href="../home/#product">Product</a></li>
          <li class="dropdown">
      <a href="#">Services</a>
      <ul class="dropdown-content">
        <li><a href="../video/video.php">Video</a></li>
        <li><a href="../list/list.php">List</a></li>
        <li><a href="buattext.php">Files</a></li>
      </ul>
    </li>
        </ul>
        <div class="buttons">
          <a href="../login/logout.php" class="logout">Logout</a>
        </div>
      </nav>

      
    <div class="wrapper">
        <form method="POST">
            <h1>Baca Text </h1>
            <div class="input-box">
                <input type="text" id="nama_file" placeholder="Masukan Nama File" name="nama_file">
            </div>
            
            <button type="submit" class="btn" name="submit" >Baca</button>
        </form>
   
    <br>
<?php
if(isset($_POST['submit'])){
    // Ambil nama file dari form
    $nama_file = $_POST['nama_file'];
    $directory = "../text/";

    // Cek apakah file ada
    if(file_exists($directory.$nama_file)){
        // Membaca isi file
        $isi_file = file_get_contents($directory.$nama_file);

        // Menampilkan isi file
        echo "<h3>Isi File dari $nama_file:</h3>";
        echo "$isi_file";
    } else {
        echo "File tidak ditemukan!";
    }
}
?>
 </div>
</body>
</html>
