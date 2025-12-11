<?php
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if (!empty($username) && !empty($password)) {
    echo "Đăng nhập thành công";
} else {
    echo "Vui lòng nhập đầy đủ thông tin";
}
?>
