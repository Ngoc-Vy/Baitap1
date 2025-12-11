<?php
session_start();
if(!isset($_SESSION['logged'])){
    header("Location: login_remember.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Xin chào <?= htmlspecialchars($_SESSION['username']) ?>!</h1>
    <p>Lần sau bạn không cần gõ username nữa nếu tick "Remember me" nhé!</p>
    <a href="logout.php">Đăng xuất</a>
</body>
</html>