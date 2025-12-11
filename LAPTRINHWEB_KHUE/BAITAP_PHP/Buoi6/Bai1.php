<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Buổi 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Bài 1: Phép tính cơ bản</h2>
    
    <!-- Form để người dùng nhập 2 số -->
    <form method="post">
        <input type="number" name="a" placeholder="Nhập số a" required 
               value="<?php echo $_POST['a'] ?? ''; ?>">
               <!-- Giữ lại giá trị đã nhập khi submit -->
        <input type="number" name="b" placeholder="Nhập số b" required 
               value="<?php echo $_POST['b'] ?? ''; ?>">
        <button type="submit">Tính toán</button>
    </form>

    <?php
    // Kiểm tra xem có dữ liệu được gửi lên không
    if ($_POST) {
        $a = $_POST['a'];    // Lấy số a từ form
        $b = $_POST['b'];    // Lấy số b từ form

        // Hàm cộng 2 số
        function tong($a, $b) {
            return $a + $b;  // Trả về tổng
        }

        // Hàm trừ 2 số
        function hieu($a, $b) {
            return $a - $b;  // Trả về hiệu
        }

        // Hàm nhân 2 số
        function tich($a, $b) {
            return $a * $b;  // Trả về tích
        }

        // Hàm chia 2 số (kiểm tra chia cho 0)
        function thuong($a, $b) {
            if ($b != 0) {
                return $a / $b;     // Chia bình thường
            } else {
                return "Không thể chia cho 0"; // Báo lỗi
            }
        }

        // Hiển thị kết quả
        echo "<p>Tổng: <strong>$a + $b = " . tong($a,$b) . "</strong></p>";
        echo "<p>Hiệu: <strong>$a - $b = " . hieu($a,$b) . "</strong></p>";
        echo "<p>Tích: <strong>$a × $b = " . tich($a,$b) . "</strong></p>";
        echo "<p>Thương: <strong>$a ÷ $b = " . thuong($a,$b) . "</strong></p>";
    }
    ?>
    <hr>
    <p><a href="bai2.php" class="btn"> Bài 2 →</a></p>
</div>
</body>
</html>