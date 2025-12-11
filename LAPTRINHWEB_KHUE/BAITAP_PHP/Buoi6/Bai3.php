<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Buổi 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Bài 3: Sắp xếp mảng tăng dần </h2>
    
    <form method="post">
        <input type="text" name="mang" placeholder="VD: 5,9,1,7,3" required>
        <button type="submit">Sắp xếp</button>
    </form>

    <?php
    if ($_POST) {
        $chuoi = $_POST['mang'];                    // Lấy chuỗi người dùng nhập
        $arr = explode(',', $chuoi);                // Tách chuỗi thành mảng bằng dấu phẩy
        $arr = array_map('trim', $arr);             // Xóa khoảng trắng thừa
        $arr = array_map('intval', $arr);           // Chuyển tất cả thành số nguyên

        // Hàm sắp xếp nổi bọt (Bubble Sort)
        function sapXepTangDan($a) {
            $n = count($a);                         // Đếm số phần tử
            for ($i = 0; $i < $n - 1; $i++) {        // Lặp n-1 lần
                for ($j = $i + 1; $j < $n; $j++) {   // So sánh từng cặp
                    if ($a[$i] > $a[$j]) {          // Nếu phần tử trước > phần tử sau
                        // Đổi chỗ 2 phần tử
                        $temp = $a[$i];
                        $a[$i] = $a[$j];
                        $a[$j] = $temp;
                    }
                }
            }
            return $a;                              // Trả về mảng đã sắp xếp
        }

        $ketqua = sapXepTangDan($arr);

        echo "<p>Mảng ban đầu: <strong>" . implode(", ", $arr) . "</strong></p>";
        echo "<p>Sắp xếp tăng dần: <strong style='color:#e74c3c'>" . implode(" → ", $ketqua) . "</strong></p>";
    }
    ?>
    <hr>
    <p><a href="bai2.php" class="btn">← Bài 2</a> | <a href="bai4.php" class="btn">Bài 4 →</a></p>
</div>
</body>
</html>