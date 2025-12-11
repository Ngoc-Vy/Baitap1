<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Buổi 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Bài 6: Tính tổng các chữ số</h2>
    
    <form method="post">
        <input type="number" name="n" placeholder="Nhập số (có thể âm)" required>
        <button type="submit">Tính tổng</button>
    </form>

    <?php
    if ($_POST) {
        $n = $_POST['n'];           // Lấy số người dùng nhập
        $soGoc = $n;                // Lưu lại số gốc để hiển thị
        $n = abs($n);               // Chuyển số âm thành dương (123 → 123, -123 → 123)
        $tong = 0;                  // Biến lưu tổng các chữ số

        // Lặp đến khi số bằng 0
        while ($n > 0) {
            $chuSo = $n % 10;       // Lấy chữ số cuối cùng (ví dụ: 123 → 3)
            $tong += $chuSo;        // Cộng chữ số đó vào tổng
            $n = (int)($n / 10);    // Bỏ chữ số cuối đi (123 → 12)
        }

        echo "<p>Số bạn nhập: <strong>$soGoc</strong></p>";
        echo "<p>Tổng các chữ số = <strong style='font-size:32px;color:#e67e22'>$tong</strong></p>";
    }
    ?>
    <hr>
    <p><a href="bai5.php" class="btn">← Bài 5</a> | <a href="bai1.php" class="btn">Về Bài 1</a></p>
</div>
</body>
</html>