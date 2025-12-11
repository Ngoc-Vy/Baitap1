<?php
session_start();

// Đếm lượt truy cập
$visits = isset($_COOKIE['visits']) ? $_COOKIE['visits'] + 1 : 1;
setcookie('visits', $visits, time() + (86400 * 365), "/");

// Lấy dữ liệu form
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$remember = isset($_POST['remember']);

if ($username === 'vy' && $password === '3110') {

    $_SESSION['logged'] = true;
    $_SESSION['name']   = 'Admin Pro';

    // REMEMBER ME
    if ($remember) {
        setcookie('remember_user', $username, time() + (86400 * 14), "/");
    } else {
        setcookie('remember_user', '', time() - 3600, "/");
    }

    header("Location: dashboard.php");
    exit();

} else {
    echo "Sai tài khoản hoặc mật khẩu! <a href='index.php'>Quay lại</a>";
}
