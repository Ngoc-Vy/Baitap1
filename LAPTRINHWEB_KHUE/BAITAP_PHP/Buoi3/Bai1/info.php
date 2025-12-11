<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>Nhập thông tin</title>
</head>
<body>

<h2>Chọn phương thức</h2>

<!-- Form gửi bằng GET -->
<form action="result.php" method="get">
    <h3>Form GET</h3>
    Tên: <input type="text" name="ten"><br>
    Tuổi: <input type="text" name="tuoi"><br>
    <input type="submit" value="Gửi bằng GET">
</form>

<hr>

<!-- Form gửi bằng POST -->
<form action="result.php" method="post">
    <h3>Form POST</h3>
    Tên: <input type="text" name="ten"><br>
    Tuổi: <input type="text" name="tuoi"><br>
    <input type="submit" value="Gửi bằng POST">
</form>

</body>
</html>
