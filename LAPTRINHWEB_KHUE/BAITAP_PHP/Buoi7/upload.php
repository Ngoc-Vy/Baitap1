<?php include 'header.php'; ?>
<!-- Dòng 1: Nhúng file header.php → tự động hiện tiêu đề, menu, CSS đẹp của cả dự án (đã làm ở Bài 5) -->

<h2>Bài 6: Upload ảnh (chỉ JPG/PNG, dưới 2MB)</h2>
<!-- Tiêu đề của trang Bài 6 -->

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['anh'])) {
    // Kiểm tra: người dùng đã bấm nút "Upload Ảnh" và có chọn file không
    // $_SERVER['REQUEST_METHOD'] == 'POST' → form được gửi bằng phương thức POST
    // isset($_FILES['anh']) → có file nào được gửi lên với name="anh"

    $file = $_FILES['anh'];
    // Lấy toàn bộ thông tin file mà người dùng vừa chọn (tên, kích thước, đường tạm, lỗi…)

    $allowed = ['jpg', 'jpeg', 'png'];
    // Danh sách định dạng được phép upload

    $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    // Lấy phần mở rộng của file (ví dụ: avatar.JPG → "jpg")
    // pathinfo(..., PATHINFO_EXTENSION) → chỉ lấy đuôi file
    // strtolower() → chuyển hết về chữ thường để so sánh cho chắc

    if ($file['error'] != 0) {
        echo "<p class='error'>Lỗi upload!</p>";
        // Nếu có lỗi khi upload (hết dung lượng server, file hỏng…) → báo lỗi
    } 
    elseif ($file['size'] > 2*1024*1024) {
        echo "<p class='error'>File phải dưới 2MB!</p>";
        // 1MB = 1024*1024 bytes → 2MB = 2*1024*1024
        // Kiểm tra kích thước file không được vượt quá 2MB
    } 
    elseif (!in_array($ext, $allowed)) {
        echo "<p class='error'>Chỉ được upload JPG hoặc PNG!</p>";
        // Kiểm tra đuôi file có nằm trong danh sách cho phép không
    } 
    else {
        // Nếu qua hết các kiểm tra → được phép upload
        $newname = time() . '.' . $ext;
        // Đổi tên file mới = thời gian hiện tại (ví dụ: 1733750000.jpg)
        // → tránh trùng tên + tăng tính bảo mật

        $dest = 'uploads/' . $newname;
        // Đường dẫn đầy đủ nơi sẽ lưu file (thư mục uploads)

        move_uploaded_file($file['tmp_name'], $dest);
        // Di chuyển file từ thư mục tạm của server → thư mục uploads của mình
        // Đây là dòng QUAN TRỌNG NHẤT khi upload file trong PHP

        echo "<p class='success'>Upload ảnh thành công!</p>";
        // Thông báo thành công

        echo "<p><img src='$dest' class='uploaded' alt='Ảnh upload'></p>";
        // Hiển thị ngay ảnh vừa upload ra màn hình
        // class='uploaded' là CSS chị đã làm sẵn trong header.php → ảnh đẹp, có viền

        echo "<p>Đường dẫn: <strong>$dest</strong></p>";
        // Hiện đường dẫn file trên server để thầy/cô kiểm tra
    }
}
?>

<form method="post" enctype="multipart/form-data">
    <!-- Bắt buộc phải có enctype="multipart/form-data" thì mới upload file được -->
    <p>Chọn ảnh (JPG hoặc PNG, tối đa 2MB):</p>
    <input type="file" name="anh" accept="image/jpeg,image/png" required>
    <!-- name="anh" → phải trùng với $_FILES['anh'] ở trên -->
    <!-- accept="image/jpeg,image/png → chỉ hiện file ảnh trong cửa sổ chọn file -->
    <!-- required → bắt buộc phải chọn file mới được submit -->

    <br><br>
    <button type="submit">Upload Ảnh</button>
    <!-- Nút bấm để gửi form -->
</form>

<?php include 'footer.php'; ?>
<!-- Nhúng footer → hiện copyright + đóng thẻ HTML đúng cách -->