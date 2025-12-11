<?php
session_start();
// Khởi động session để có thể thao tác (xóa) session hiện tại

session_destroy();
// Xóa toàn bộ dữ liệu session
// → đăng xuất khỏi hệ thống

header("Location: login.php");
// Sau khi đăng xuất, chuyển người dùng về trang đăng nhập

exit();
// Dừng chương trình để đảm bảo không chạy code phía dưới
?>
