<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Buổi 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Bài 5: Xử lý chuỗi</h2>
    
    <form method="post">
        <input type="text" name="chuoi" placeholder="Nhập chuỗi bất kỳ" required>
        <button type="submit">Xử lý</button>
    </form>

    <?php
    if ($_POST) {
        $s = $_POST['chuoi'];   // Lấy chuỗi người dùng nhập

        // Hàm đảo ngược chuỗi
        function daoNguoc($str) {
            return strrev($str);    // Dùng hàm có sẵn của PHP
        }

        // Hàm đếm số từ
        function demTu($str) {
            return str_word_count($str);  // Đếm số từ trong chuỗi
        }

        // Hàm kiểm tra palindrome (đọc xuôi = đọc ngược)
        function laPalindrome($str) {
            $str = strtolower($str);                    // Chuyển về chữ thường
            $str = preg_replace("/[^a-zA-Z0-9]/", "", $str); // Xóa ký tự đặc biệt và khoảng trắng
            return $str === strrev($str);               // So sánh với chuỗi đảo ngược
        }

        echo "<p>Chuỗi gốc: <strong>$s</strong></p>";
        echo "<p>Đảo ngược: <strong>" . daoNguoc($s) . "</strong></p>";
        echo "<p>Số từ: <strong>" . demTu($s) . "</strong></p>";
        
        if (laPalindrome($s)) {
            echo "<p>Là chuỗi <strong style='color:green'>Palindrome</strong></p>";
        } else {
            echo "<p><strong style='color:red'>Không phải</strong> Palindrome</p>";
        }
    }
    ?>
    <hr>
    <p><a href="bai4.php" class="btn">← Bài 4</a> | <a href="bai6.php" class="btn">Bài 6 →</a></p>
</div>
</body>
</html>