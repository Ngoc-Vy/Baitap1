<?php
session_start();
// Khởi động session để lưu trạng thái đăng nhập

$username = $_POST['username'] ?? '';
// Lấy username từ form POST
// Nếu không tồn tại thì gán chuỗi rỗng để tránh lỗi

$password = $_POST['password'] ?? '';
// Lấy password từ form POST
// Nếu không tồn tại thì gán chuỗi rỗng

$remember = isset($_POST['remember']);
// Kiểm tra người dùng có tick checkbox "Remember me" hay không
// Có tick → true, không tick → false

if ($username === 'vy' && $password === '3110') {
    // Kiểm tra thông tin đăng nhập có đúng không

    $_SESSION['logged'] = true;
    // Lưu trạng thái: người dùng đã đăng nhập

    $_SESSION['username'] = $username;
    // Lưu tên đăng nhập vào session

    // ===== XỬ LÝ REMEMBER ME =====
    if ($remember) {
        // Nếu người dùng tick "Remember me"

        setcookie('remember_user', $username, time() + (86400 * 7), "/");
        // Lưu cookie 'remember_user' trong 7 ngày
        // 86400 = 1 ngày (tính theo giây)
    } else {
        // Nếu người dùng KHÔNG tick "Remember me"

        if (isset($_COOKIE['remember_user'])) {
            // Nếu trước đó đã từng lưu cookie

            setcookie('remember_user', '', time() - 3600, "/");
            // Xóa cookie cũ bằng cách đặt thời gian về quá khứ
        }
    }

    header("Location: welcome.php");
    // Đăng nhập thành công → chuyển sang trang welcome.php

    exit();
    // Dừng script để không chạy code phía sau
} else {
    // Trường hợp đăng nhập sai

    echo "Sai thông tin! <a href='login_remember.php'>Thử lại</a>";
    // Thông báo lỗi và cho quay lại trang đăng nhập
}
?>
