<?php session_start(); ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Đăng nhập Admin</h2>
    <form action="check.php" method="post">
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <button type="submit">Đăng nhập</button>
    </form>
</body>
</html>