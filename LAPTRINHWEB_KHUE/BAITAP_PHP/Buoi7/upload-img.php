<?php include 'header.php'; ?>
<h2>Bài 6: Upload ảnh (chỉ JPG/PNG, dưới 2MB)</h2>

<?php
// Tự động tạo thư mục uploads nếu chưa có
if (!is_dir('uploads')) {
    mkdir('uploads', 0777, true);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['anh'])) {
    $file = $_FILES['anh'];
    $allowed = ['jpg', 'jpeg', 'png'];
    $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

    if ($file['error'] != 0) {
        echo "<p class='error'>Lỗi upload!</p>";
    } elseif ($file['size'] > 2*1024*1024) {
        echo "<p class='error'>File phải dưới 2MB!</p>";
    } elseif (!in_array($ext, $allowed)) {
        echo "<p class='error'>Chỉ được upload JPG hoặc PNG!</p>";
    } else {
        $newname = time() . '.' . $ext;
        $dest = 'uploads/' . $newname;

        if (move_uploaded_file($file['tmp_name'], $dest)) {
            echo "<p class='success'>Upload ảnh thành công!</p>";
            echo "<p><img src='$dest' class='uploaded' alt='Ảnh đã upload'></p>";
            echo "<p>Đường dẫn: <strong>$dest</strong></p>";
        } else {
            echo "<p class='error'>Không thể lưu file!</p>";
        }
    }
}
?>

<form method="post" enctype="multipart/form-data">
    <p>Chọn ảnh (JPG hoặc PNG, tối đa 2MB):</p>
    <input type="file" name="anh" accept="image/jpeg,image/png" required>
    <br><br>
    <button type="submit">Upload Ảnh</button>
</form>

<?php include 'footer.php'; ?>