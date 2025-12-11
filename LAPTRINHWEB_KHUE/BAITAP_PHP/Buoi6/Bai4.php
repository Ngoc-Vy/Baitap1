<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Buổi 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Bài 4: Tìm các số nguyên tố trong mảng</h2>
    
    <form method="post">
        <input type="text" name="mang" placeholder="VD: 3,4,5,6,7,11" required>
        <button type="submit">Tìm số nguyên tố</button>
    </form>

    <?php
    if ($_POST) {
        $chuoi = $_POST['mang'];
        $arr = array_map('intval', explode(',', $chuoi)); // Chuyển chuỗi → mảng số

        // Hàm kiểm tra số nguyên tố (giống bài 2)
        function laSoNguyenTo($n) {
            if ($n < 2) return false;
            for ($i = 2; $i <= sqrt($n); $i++) {
                if ($n % $i == 0) return false;
            }
            return true;
        }

        // Hàm lọc ra các số nguyên tố
        function timSoNguyenTo($a) {
            $kq = [];                   // Tạo mảng rỗng để chứa kết quả
            foreach ($a as $so) {       // Duyệt từng phần tử
                if (laSoNguyenTo($so)) {
                    $kq[] = $so;        // Nếu là nguyên tố thì thêm vào mảng kết quả
                }
            }
            return $kq;
        }

        $nguyenTo = timSoNguyenTo($arr);

        echo "<p>Mảng gốc: <strong>" . implode(", ", $arr) . "</strong></p>";
        echo "<p>Các số nguyên tố: <strong style='color:green'>" . implode(", ", $nguyenTo) . "</strong></p>";
    }
    ?>
    <hr>
    <p><a href="bai3.php" class="btn">← Bài 3</a> | <a href="bai5.php" class="btn">Bài 5 →</a></p>
</div>
</body>
</html>