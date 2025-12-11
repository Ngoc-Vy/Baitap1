<?php
session_start();
// Khởi động session để PHP biết đang làm việc với session nào

session_destroy();
// Xóa toàn bộ dữ liệu session hiện tại (ví dụ: $_SESSION['name'])

header("Location: index.php");
// Chuyển hướng người dùng về trang index.php

exit();
// Dừng chương trình ngay lập tức
// Đảm bảo không có code nào phía dưới được thực thi
?>
