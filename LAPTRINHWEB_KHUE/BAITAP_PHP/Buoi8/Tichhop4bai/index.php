<?php session_start(); ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập hệ thống</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Employer Portal</h1>

    <form action="login-process.php" method="POST">
        <div class="input-group">
            <label>Tên đăng nhập</label>
            <input type="text" name="username"
                   value="<?= $_COOKIE['remember_user'] ?? '' ?>" required>
        </div>

        <div class="input-group">
            <label>Mật khẩu</label>
            <input type="password" name="password" required>
        </div>

        <div class="remember">
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Remember me 14 ngày</label>
        </div>

        <button type="submit" class="btn">Đăng nhập ngay</button>
    </form>
</div>
</body>
</html>
