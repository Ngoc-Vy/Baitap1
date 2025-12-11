<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử Lý Mảng Số - Cho Âm, 0, Trùng</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">XỬ LÝ DÃY SỐ NGUYÊN (CHO ÂM, 0, TRÙNG)</div>
        
        <div class="content">
            <?php
            $arr = [];
            $errors = [];
            $success = false;  // Chỉ true khi xử lý thành công (không có lỗi)

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $input = trim($_POST['numbers'] ?? '');

                // Nếu nhấn "NHẬP LẠI" (tức là có hidden field reset)
                if (isset($_POST['reset'])) {
                    $input = '';
                }

                if (!empty($input)) {
                    $input = preg_replace('/\s+/', ',', $input);
                    $input = preg_replace('/,+/', ',', $input);
                    $input = trim($input, ',');

                    $parts = explode(',', $input);

                    foreach ($parts as $i => $part) {
                        $part = trim($part);
                        if ($part === '') continue;

                        if (!is_numeric($part)) {
                            $errors[] = "Phần tử \"$part\" không phải số!";
                            continue;
                        }

                        $arr[] = floatval($part);  // Cho phép âm, 0, trùng
                    }

                    if (empty($errors)) {
                        $success = true;  // Chỉ khi không có lỗi mới là thành công
                    }
                }
            }
            ?>

            <form method="POST">
                <label for="numbers">
                    Nhập dãy số (cách nhau bằng dấu phẩy hoặc khoảng trắng):<br>
                    <small style="color:#e91e63;">(Cho phép số âm, số 0, trùng nhau)</small>
                </label>
                <input type="text" name="numbers" id="numbers" 
                       placeholder="Ví dụ: -10, 0, 5, 5, 100, -7.5, 0" 
                       value="<?= !$success ? htmlspecialchars($_POST['numbers'] ?? '') : '' ?>" 
                       required autofocus>

                <!-- Nút thông minh: chỉ đổi thành NHẬP LẠI khi xử lý thành công -->
                <?php if ($success): ?>
                    <button type="submit" name="reset" value="1" style="background:#4caf50;">
                        NHẬP LẠI DÃY SỐ KHÁC
                    </button>
                <?php else: ?>
                    <button type="submit">
                        XỬ LÝ NGAY
                    </button>
                <?php endif; ?>
            </form>
<!-- 
            <div class="note">
                Ví dụ hợp lệ: -5, 0, 10, 10, -3, 7.5, 0, 100<br>
                Nhập sai → sửa lại thoải mái → bấm "XỬ LÝ NGAY"<br>
                Xử lý xong → bấm "NHẬP LẠI" để làm dãy mới
            </div> -->

            <!-- LỖI -->
            <?php if (!empty($errors)): ?>
                <div class="result-box" style="background:#ffebee; border-left:6px solid #e74c3c;">
                    <strong>CÓ LỖI NHẬP LIỆU:</strong>
                    <ul style="margin:15px 0; text-align:left;">
                        <?php foreach ($errors as $e) echo "<li>$e</li>"; ?>
                    </ul>
                    <small style="color:#c62828;">Sửa lại rồi bấm "XỬ LÝ NGAY" nhé!</small>
                </div>
            <?php endif; ?>

            <!-- KẾT QUẢ KHI THÀNH CÔNG -->
            <?php if ($success && !empty($arr)): ?>
                <div class="result-box">
                    <strong>Mảng hợp lệ:</strong> 
                    <span class="highlight">[ <?= implode(" , ", $arr) ?> ]</span>
                </div>

                <?php
                $count = count($arr);
                $sum   = array_sum($arr);
                $max   = max($arr);
                $min   = min($arr);
                $even  = array_filter($arr, fn($n) => fmod($n, 2) == 0);
                ?>

                <div class="result-box">Số lượng: <span class="highlight"><?= $count ?></span></div>
                <div class="result-box">Tổng: <span class="highlight"><?= $sum ?></span></div>
                <div class="result-box">Lớn nhất: <span class="highlight"><?= $max ?></span></div>
                <div class="result-box">Nhỏ nhất: <span class="highlight"><?= $min ?></span></div>
                <div class="result-box">
                    Số chẵn: <?= !empty($even) ? "<span class='highlight'>" . implode(" , ", $even) . "</span>" : "Không có" ?>
                </div>

                <table>
                    <tr><th>STT</th><th>Giá trị</th><th>Chẵn/Lẻ</th></tr>
                    <?php foreach ($arr as $i => $v): ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><strong><?= $v ?></strong></td>
                        <td><?= fmod($v, 2) == 0 ? "<span style='color:green'>Chẵn</span>" : "<span style='color:#e91e63'>Lẻ</span>" ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>