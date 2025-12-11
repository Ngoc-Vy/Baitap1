<?php
session_start();
// Khởi động session để lưu trạng thái đăng nhập

$username = $_POST['username'] ?? '';
// Lấy giá trị username từ form POST
// Nếu không tồn tại thì gán chuỗi rỗng để tránh lỗi

$password = $_POST['password'] ?? '';
// Lấy giá trị password từ form POST
// Nếu không tồn tại thì gán chuỗi rỗng

if ($username === 'vy' && $password === '3110') {
    // Kiểm tra tài khoản và mật khẩu có đúng hay không

    $_SESSION['logged'] = true;
    // Lưu trạng thái: đã đăng nhập

    $_SESSION['username'] = $username;
    // Lưu tên đăng nhập vào session

    header("Location: admin.php");
    // Nếu đăng nhập đúng → chuyển sang trang admin.php

    exit();
    // Dừng chương trình để đảm bảo không chạy code phía dưới
} else {
    // Nếu đăng nhập sai

    echo "Sai tài khoản hoặc mật khẩu! <a href='login.php'>Thử lại</a>";
    // Thông báo lỗi và cho phép quay lại trang đăng nhập
}
?>
