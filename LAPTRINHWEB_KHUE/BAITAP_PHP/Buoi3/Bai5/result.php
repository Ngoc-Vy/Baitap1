<?php
$comment = isset($_POST['comment']) ? trim($_POST['comment']) : '';

$error = '';
$ketqua = '';

function kiemtrahople($s) {
    if ($s === '') return false;
    if (preg_match('/<\s*script|\<\?php|\<\?|\bfunction\s*\(|\beval\s*\(|\bconsole\.log\b/i', $s)) {
        return true;
    }
    if (preg_match('/[<>{}\[\]~`|^]/', $s)) {
        return true;
    }
    return false;
}

if (kiemtrahople($comment)) {
    $error = 'Lỗi: nội dung chứa mã hoặc ký tự đặc biệt không hợp lệ.';
} else {
    $search  = ['&', '<', '>', '"', "'", '/'];
    $replace = ['&amp;', '&lt;', '&gt;', '&quot;', '&#039;', '&#x2F;'];
    $ketqua = str_replace($search, $replace, $comment);
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="utf-8">
  <title>Kết quả bình luận</title>
</head>
<body>
  <h2>Bình luận đã gửi</h2>
  <div style="white-space: pre-wrap; border:1px solid #ccc; padding:10px; max-width:800px;">
    <?php if ($error): ?>
      <span style="color:red;"><?php echo $error; ?></span>
    <?php else: ?>
      <?php echo $ketqua; ?>
    <?php endif; ?>
  </div>
  <p><a href="comment.php">Quay lại</a></p>
</body>
</html>