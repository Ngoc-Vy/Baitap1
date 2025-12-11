<?php
session_start();
// Khởi động session để kiểm tra trạng thái đăng nhập

if (!isset($_SESSION['logged']) || $_SESSION['logged'] !== true) {
    // Kiểm tra:
    // 1. Session 'logged' có tồn tại không
    // 2. Giá trị có đúng là true không
    // Nếu KHÔNG → chưa đăng nhập hoặc login không hợp lệ

    header("Location: login.php");
    // Chuyển người dùng về trang đăng nhập

    exit();
    // Dừng chương trình để không chạy tiếp nội dung admin
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Chào mừng <?= htmlspecialchars($_SESSION['username']) ?> đến khu vực Admin!</h1>
    <p>Đây là trang chỉ admin mới vào được.</p>
    <a href="logout.php">Đăng xuất</a>
</body>
</html>