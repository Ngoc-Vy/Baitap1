<?php
$email = $_POST['email'];
$password = $_POST['password'];
$valid = true;

// Kiểm tra định dạng email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "❗ Email không hợp lệ<br>";
    $valid = false;
}

// Kiểm tra độ dài mật khẩu
if (strlen($password) < 6) {
    echo "❗ Mật khẩu phải ít nhất 6 ký tự<br>";
    $valid = false;
}

// Nếu hợp lệ
if ($valid) {
    echo "✔ Thông tin hợp lệ.";
}
?>
