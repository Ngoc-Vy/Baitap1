<?php
function e($v) {
    return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8');
}

$method = $_SERVER['REQUEST_METHOD']; // GET hoặc POST

$ten_get = $_GET['ten'] ?? '';
$tuoi_get = $_GET['tuoi'] ?? '';

$ten_post = $_POST['ten'] ?? '';
$tuoi_post = $_POST['tuoi'] ?? '';

$ten_request = $_REQUEST['ten'] ?? '';
$tuoi_request = $_REQUEST['tuoi'] ?? '';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>Kết quả</title>
</head>
<body>

<h2>Phương thức gửi hiện tại: <?php echo e($method); ?></h2>

<?php if ($method === 'GET'): ?>
    <p>Dữ liệu từ GET → Xin chào <?php echo e($ten_get); ?>, bạn <?php echo e($tuoi_get); ?> tuổi.</p>

<?php elseif ($method === 'POST'): ?>
    <p>Dữ liệu từ POST → Xin chào <?php echo e($ten_post); ?>, bạn <?php echo e($tuoi_post); ?> tuổi.</p>

<?php endif; ?>

<hr>

<h3>Dữ liệu từ REQUEST (nhận được cả GET lẫn POST):</h3>
<p>Xin chào <?php echo e($ten_request); ?>, bạn <?php echo e($tuoi_request); ?> tuổi.</p>

<p><a href="info.php">Quay lại</a></p>

</body>
</html>
