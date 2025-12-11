<?php session_start(); ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Nhập tên</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Nhập tên của bạn</h2>
    <form action="save_name.php" method="post">
        Tên: <input type="text" name="name" required>
        <button type="submit">Gửi</button>
    </form>
</body>
</html>