<?php
// Kiểm tra cookie 'visit_counter' đã tồn tại hay chưa
if (isset($_COOKIE['visit_counter'])) {
    // Nếu cookie đã tồn tại → tăng giá trị lên 1
    $count = $_COOKIE['visit_counter'] + 1;
} else {
    // Nếu chưa tồn tại → đây là lần truy cập đầu tiên
    $count = 1;
}

// Lưu lại cookie với:
// - Tên: visit_counter
// - Giá trị: $count
// - Thời gian hết hạn: hiện tại + 365 ngày
// - "/" : cookie có hiệu lực cho toàn bộ website
setcookie('visit_counter', $count, time() + (86400 * 365), "/");
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đếm lượt truy cập</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Xin chào! Đây là lần thứ <strong><?= $count ?></strong> bạn ghé thăm trang này!</h1>
    <p><a href="visit_counter.php">Tải lại trang</a> để tăng đếm</p>
    <p><a href="clear_cookie.php">Xóa cookie đếm</a></p>
</body>
</html>