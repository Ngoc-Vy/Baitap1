<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6 Bài Tập PHP - Hoàn Chỉnh 100%</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header><h1>6 Bài Tập PHP Cơ Bản</h1></header>

        <div class="menu-bai">
            <label><strong>Chọn bài tập:</strong></label>
            <select id="chonbai" onchange="hienThiBai(this.value)">
                <option value="">-- Chọn một bài --</option>
                <option value="1">Bài 1: Kiểm tra số dương</option>
                <option value="2">Bài 2: Xếp loại học lực</option>
                <option value="3">Bài 3: Thứ trong tuần (1-7)</option>
                <option value="4">Bài 4: Tổng 1 đến n</option>
                <option value="5">Bài 5: Số chẵn 1 đến n</option>
                <option value="6">Bài 6: Đếm ngược n → 1</option>
            </select>
        </div>

        <main>
            <!-- BÀI 1 -->
            <div class="form-group" id="bai1">
                <h3>1. Kiểm tra số đó có phải là số dương hay không?</h3>
                <form method="POST">
                    <input type="text" name="so1" placeholder="Nhập một số (có thể âm)" required>
                    <button type="submit" name="btn1">Kiểm tra</button>
                </form>
                <?php if(isset($_POST['btn1'])) {
                    $input = trim($_POST['so1']);
                    if(!is_numeric($input)) {
                        echo "<div class='result error'>Lỗi: Vui lòng nhập một số hợp lệ! Bạn nhập: \"$input\"</div>";
                    } else {
                        $so = floatval($input);
                        if($so > 0)
                            echo "<div class='result'>Số <strong>$so</strong> là <span style='color:green;font-size:1.3em;'>số dương</span></div>";
                        else
                            echo "<div class='result'>Số <strong>$so</strong> <span style='color:#e65100;font-size:1.3em;'>không phải số dương</span></div>";
                    }
                } ?>
            </div>

            <!-- BÀI 2 -->
            <div class="form-group" id="bai2">
                <h3>2. Xếp loại học lực theo điểm trung bình</h3>
                <form method="POST">
                    <input type="text" name="diem" placeholder="Nhập điểm trung bình (0-10)" required>
                    <button type="submit" name="btn2">Xếp loại</button>
                </form>
                <?php if(isset($_POST['btn2'])) {
                    $input = trim($_POST['diem']);
                    if(!is_numeric($input) || $input < 0 || $input > 10) {
                        echo "<div class='result error'>Lỗi: Điểm phải là số từ 0 đến 10!</div>";
                    } else {
                        $d = floatval($input);
                        if($d >= 8.0) $xl = "Giỏi";
                        elseif($d >= 6.5) $xl = "Khá";
                        elseif($d >= 5.0) $xl = "Trung bình";
                        else $xl = "Yếu";
                        echo "<div class='result'>Điểm <strong>$d</strong> → Xếp loại: <strong style='color:#4a00e0;'>$xl</strong></div>";
                    }
                } ?>
            </div>

            <!-- BÀI 3 - ĐÃ CHỈNH SỬA HOÀN HẢO -->
            <div class="form-group" id="bai3">
                <h3>3. Nhập số từ 1-7 để xem thứ trong tuần</h3>
                <form method="POST">
                    <input type="text" name="thu" placeholder="Nhập số từ 1 đến 7" required>
                    <button type="submit" name="btn3">Xem thứ</button>
                </form>
                <?php if(isset($_POST['btn3'])) {
                    $input = trim($_POST['thu']);
                    
                    // Kiểm tra có phải số không
                    if(!is_numeric($input)) {
                        echo "<div class='result error'>
                                Lỗi: Bạn phải nhập một số! Bạn đã nhập: \"$input\"
                              </div>";
                    }
                    // Kiểm tra có phải số nguyên không
                    elseif($input != intval($input)) {
                        echo "<div class='result error'>
                                Lỗi: Chỉ được nhập số nguyên! Bạn đã nhập: \"$input\"
                              </div>";
                    }
                    // Kiểm tra nằm ngoài khoảng 1-7
                    elseif($input < 1 || $input > 7) {
                        echo "<div class='result error'>
                                Lỗi: Số phải nằm trong khoảng từ 1 đến 7! Bạn đã nhập: <strong>$input</strong>
                              </div>";
                    }
                    else {
                        $t = (int)$input;
                        $ngay = [
                            1 => "Chủ nhật",
                            2 => "Thứ hai",
                            3 => "Thứ ba",
                            4 => "Thứ tư",
                            5 => "Thứ năm",
                            6 => "Thứ sáu",
                            7 => "Thứ bảy"
                        ];
                        echo "<div class='result'>
                                Số <strong>$t</strong> → <strong style='color:#4a00e0;font-size:1.3em;'>{$ngay[$t]}</strong>
                              </div>";
                    }
                } ?>
            </div>

            <!-- BÀI 4 -->
            <div class="form-group" id="bai4">
                <h3>4. Tính tổng các số từ 1 đến n</h3>
                <form method="POST">
                    <input type="text" name="n4" placeholder="Nhập số nguyên dương n" required>
                    <button type="submit" name="btn4">Tính tổng</button>
                </form>
                <?php if(isset($_POST['btn4'])) {
                    $input = trim($_POST['n4']);
                    if(!is_numeric($input) || $input < 1 || $input != floor($input)) {
                        echo "<div class='result error'>Lỗi: n phải là số nguyên dương ≥ 1!</div>";
                    } else {
                        $n = (int)$input;
                        $tong = $n * ($n + 1) / 2;
                        echo "<div class='result'>Tổng từ 1 đến <strong>$n</strong> = <strong style='font-size:1.4em;color:#4a00e0;'>$tong</strong></div>";
                    }
                } ?>
            </div>

            <!-- BÀI 5 -->
            <div class="form-group" id="bai5">
                <h3>5. In các số chẵn từ 1 đến n</h3>
                <form method="POST">
                    <input type="text" name="n5" placeholder="Nhập số nguyên dương n" required>
                    <button type="submit" name="btn5">In số chẵn</button>
                </form>
                <?php if(isset($_POST['btn5'])) {
                    $input = trim($_POST['n5']);
                    if(!is_numeric($input) || $input < 1 || $input != floor($input)) {
                        echo "<div class='result error'>Lỗi: n phải là số nguyên dương ≥ 1!</div>";
                    } else {
                        $n = (int)$input;
                        $kq = "";
                        for($i=2; $i<=$n; $i+=2) $kq .= $i . " ";
                        $kq = $kq ?: "Không có";
                        echo "<div class='result'>Số chẵn từ 1 đến <strong>$n</strong>: <strong style='color:#4a00e0;'>$kq</strong></div>";
                    }
                } ?>
            </div>

            <!-- BÀI 6 -->
            <div class="form-group" id="bai6">
                <h3>6. In các số từ n về 1</h3>
                <form method="POST">
                    <input type="text" name="n6" placeholder="Nhập số nguyên dương n" required>
                    <button type="submit" name="btn6">Đếm ngược</button>
                </form>
                <?php if(isset($_POST['btn6'])) {
                    $input = trim($_POST['n6']);
                    if(!is_numeric($input) || $input < 1 || $input != floor($input)) {
                        echo "<div class='result error'>Lỗi: n phải là số nguyên dương ≥ 1!</div>";
                    } else {
                        $n = (int)$input;
                        $kq = "";
                        for($i=$n; $i>=1; $i--) $kq .= $i . " ";
                        echo "<div class='result'>Từ <strong>$n</strong> về 1: <strong style='color:#4a00e0;'>$kq</strong></div>";
                    }
                } ?>
            </div>
        </main>
    </div>

    <script>
        function hienThiBai(bai) {
            document.querySelectorAll('.form-group').forEach(div => div.classList.remove('active'));
            if(bai !== "") document.getElementById('bai' + bai).classList.add('active');
        }
        <?php
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $btns = ['btn1'=>1,'btn2'=>2,'btn3'=>3,'btn4'=>4,'btn5'=>5,'btn6'=>6];
            foreach($btns as $b => $num) {
                if(isset($_POST[$b])) {
                    echo "hienThiBai('$num'); document.getElementById('chonbai').value = '$num';";
                    break;
                }
            }
        }
        ?>
    </script>
</body>
</html>