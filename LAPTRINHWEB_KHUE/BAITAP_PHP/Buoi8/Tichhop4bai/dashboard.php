<?php
session_start();

// Chặn chưa đăng nhập
if (!isset($_SESSION['logged'])) {
    header("Location: index.php");
    exit();
}

$visits = $_COOKIE['visits'] ?? 0;
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container dashboard">
    <h1>Chào mừng quay lại!</h1>

    <div class="welcome-name">
        <?= htmlspecialchars($_SESSION['name']) ?>
    </div>

    <p>Bạn đã truy cập website này</p>
    <div class="count"><?= $visits ?></div>
    <p>lần</p>

    <a href="logout.php" class="logout">Đăng xuất</a>
</div>
</body>
</html>
