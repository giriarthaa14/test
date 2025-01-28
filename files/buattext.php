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
    <link rel="stylesheet" href="buattext.css" />
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

<!-- buattext -->

 
<div class="wrapper">
        <form method="POST">
            <h1>Buat Text Anda</h1>
            <div class="input-box">
                <input type="text" placeholder="Masukan Judul" name="judul" id="judul" required>
            </div>
            <div class="input-box">
              <textarea name="isi" id="isi" cols="30" rows="10" placeholder="Masukan Isi"></textarea>
            </div>
           <div class="btn">
             <button type="submit" class="btn1" name="submit">Buat File</button>
             <button type ="button" class="btn1" onclick="location.href='bacatext.php'">Baca File</button>
           </div>
        </form>
    </div>

<?php
if(isset($_POST['submit'])){
    // Ambil judul dan isi dari form
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

    $directory = "../text/";

    // Membuat nama file
    $nama_file = $judul . ".txt";

    // Membuka file untuk ditulis
    $file = fopen($directory.$nama_file, "w");

    // Menulis isi ke dalam file
    fwrite($file, $isi);

    // Menutup file
    fclose($file);

    // echo "File dengan nama $nama_file berhasil dibuat: ";
    echo "<script>alert('File dengan nama $nama_file berhasil dibuat')</script>";  
}
?>

</body>
</html>
  </body>
</html>