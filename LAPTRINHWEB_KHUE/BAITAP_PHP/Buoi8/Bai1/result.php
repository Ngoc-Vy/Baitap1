<?php
session_start();
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chào mừng</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php if (isset($_SESSION['name'])): ?>
<!-- Kiểm tra xem session 'name' đã tồn tại hay chưa-->

    <h1>Xin chào, <?= htmlspecialchars($_SESSION['name']) ?>!</h1>
    <!-- Hiển thị lời chào và in ra tên người dùng -->
    <!-- htmlspecialchars() dùng để tránh lỗi bảo mật XSS -->

    <a href="index.php">Nhập lại tên</a> | 
    <!-- Link quay lại trang index để nhập lại tên -->

    <a href="destroy.php">Xóa session</a>
    <!-- Link sang file destroy.php để xóa session -->

<?php else: ?>
<!-- Nếu session 'name' chưa tồn tại-->

    <p>Chưa có tên! <a href="index.php">Quay lại</a></p>
    <!-- Thông báo chưa có tên và link quay về trang nhập -->

<?php endif; ?>
<!-- Kết thúc điều kiện if-->
</body>
</html>