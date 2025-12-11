<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Buổi 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Bài 2: Kiểm tra số chẵn và số nguyên tố</h2>
    
    <form method="post">
        <input type="number" name="n" placeholder="Nhập một số" required>
        <button type="submit">Kiểm tra</button>
    </form>

    <?php
    if ($_POST) {
        $n = $_POST['n'];   // Lấy số người dùng nhập

        // Hàm kiểm tra số chẵn/lẻ
        function kiemTraSoChan($n) {
            return ($n % 2 == 0);   // Nếu chia hết cho 2 → chẵn → true
        }

        // Hàm kiểm tra số nguyên tố
        function kiemTraSoNguyenTo($n) {
            if ($n < 2) return false;               // 0, 1, số âm không phải nguyên tố
            for ($i = 2; $i <= sqrt($n); $i++) {     // Duyệt từ 2 đến căn bậc 2 của n
                if ($n % $i == 0) return false;     // Nếu chia hết → không phải nguyên tố
            }
            return true;                            // Không chia hết cho số nào → nguyên tố
        }

        // Gọi hàm và hiển thị kết quả
        if (kiemTraSoChan($n)) {
            echo "<p>Số <strong>$n</strong> là số <strong>chẵn</strong></p>";
        } else {
            echo "<p>Số <strong>$n</strong> là số <strong>lẻ</strong></p>";
        }

        if (kiemTraSoNguyenTo($n)) {
            echo "<p>Số <strong>$n</strong> là <strong style='color:green'>số nguyên tố</strong></p>";
        } else {
            echo "<p>Số <strong>$n</strong> <strong style='color:red'>không phải</strong> số nguyên tố</p>";
        }
    }
    ?>
    <hr>
    <p><a href="bai1.php" class="btn">← Bài 1</a> | <a href="bai3.php" class="btn">Bài 3 →</a></p>
</div>
</body>
</html>