<?php
session_start();
// Khởi động session để có thể lưu và sử dụng biến session

if (isset($_POST['name']) && !empty(trim($_POST['name']))) {
    // Kiểm tra:
    // 1. Trường 'name' có được gửi lên bằng POST không
    // 2. Sau khi xóa khoảng trắng đầu/cuối thì có rỗng không

    $_SESSION['name'] = trim($_POST['name']);
    // Lưu tên người dùng vào session (đã loại bỏ khoảng trắng)

    header("Location: result.php");
    // Chuyển hướng sang trang result.php sau khi lưu session

    exit();
    // Dừng chương trình để tránh chạy tiếp code phía dưới
}
?>
