<?php
session_start();
if (!isset($_SESSION['kesempatan'])) {
    $_SESSION['kesempatan'] = 3;
}
if (!isset($_GET['msg'])) {
   $_GET['msg'] = '';  
}

if ($_GET['msg'] == 'error') {
    echo "<script>alert('username/password salah!')</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>
    
    <div class="wrapper">
        <form action="../login/proses_login.php" method="POST">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Masukan Username" name="username" id="input" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Masukan Password" name="password" id="input" required>
            </div>
            <button type="submit" class="btn">Login</button>
            <button type="reset" class="btn">Batal</button>
        </form>
       
    </div>
    <script src="../js/login.js"></script>
    <?php
    if ($_SESSION['kesempatan'] < 1) {
        echo "<script>banned()</script>";
        $_SESSION['kesempatan'] = 3;
    }

    ?>
</body>
</html>