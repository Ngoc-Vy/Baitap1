<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>Kiểm tra định dạng</title>
</head>
<body>
    <h3>Kiểm tra</h3>
    <form method="POST" action="result.php">
        <input type="text" name="noidung" placeholder="nội dung">

        <button type="submit">POST</button>
    </form>
        <form method="GET" action="result.php">
        <input type="text" name="noidung" placeholder="nội dung">
        <button type="submit">GET</button>
    </form>

</body>
</html>