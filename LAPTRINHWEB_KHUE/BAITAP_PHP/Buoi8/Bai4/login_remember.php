<?php session_start(); ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập + Remember me</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Đăng nhập</h2>
    <form action="check_remember.php" method="post">
        Username: 
        <input type="text" name="username" value="<?= $_COOKIE['remember_user'] ?? '' ?>" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        
        <label>
            <input type="checkbox" name="remember" value="1"> Remember me (7 ngày)
        </label><br><br>
        
        <button type="submit">Đăng nhập</button>
    </form>
</body>
</html>