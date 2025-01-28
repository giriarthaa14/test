<?php

function backFunction()
{
    echo "<script>history.back()</script>";
}
session_start();
if (!isset($_SESSION['kesempatan'])) {
    $_SESSION['kesempatan'] = 3;
}

$user = [
    [
        'id' => 1,
        'username' => 'putu',
        'password' => 123
    ]
];

$username = $_POST['username'];
$password = $_POST['password'];

foreach ($user as $userLogin) {
    if ($userLogin['username'] == $username && $userLogin['password'] == $password) {
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $userLogin['id'];
        $_SESSION['kesempatan'] = 3;
        echo "<script>alert('Anda Berhasil Login');
        window.location.href = '../home/home.php'</script>";        
        break;
    } else {
        $_SESSION['kesempatan']--;
        header('Location: login.php?msg=error');
        backFunction();
        exit();
    }
}
?>