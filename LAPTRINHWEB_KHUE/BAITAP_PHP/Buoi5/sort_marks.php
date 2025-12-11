<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sắp Xếp Mảng Số - Không Giới Hạn</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">SẮP XẾP MẢNG SỐ - NHẬP TỰ DO</div>
        
        <div class="content">
            <?php
            $marks = [];
            $errors = [];
            $sorted = [];
            $sortType = '';
            $success = false;

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $input = trim($_POST['marks_input'] ?? '');

                if (!empty($input)) {
                    // Chuẩn hóa input
                    $input = preg_replace('/\s+/', ',', $input);
                    $input = preg_replace('/,+/', ',', $input);
                    $input = trim($input, ',');

                    $parts = explode(',', $input);

                    foreach ($parts as $part) {
                        $part = trim($part);
                        if ($part === '') continue;

                        if (!is_numeric($part)) {
                            $errors[] = "Giá trị \"$part\" không phải là số!";
                            continue;
                        }

                        $marks[] = floatval($part);  // CHO PHÉP TẤT CẢ: âm, dương, 0, lớn, thực, trùng
                    }

                    if (empty($errors) && !empty($marks)) {
                        $choice = $_POST['sort_type'] ?? '';

                        if ($choice === 'asc') {
                            $sorted = $marks;
                            sort($sorted);
                            $sortType = 'TĂNG DẦN';
                        } elseif ($choice === 'desc') {
                            $sorted = $marks;
                            rsort($sorted);
                            $sortType = 'GIẢM DẦN';
                        }
                        $success = true;
                    }
                }
            }
            ?>

            <form method="POST">
                <label for="marks_input">Nhập dãy số bất kỳ (cách nhau bằng dấu phẩy hoặc khoảng trắng):</label>
                <input type="text" name="marks_input" id="marks_input" 
                       placeholder="Ví dụ: -100, 3.14, 0, 999, -7.5, 5, 5" required
                       value="<?= !$success ? htmlspecialchars($_POST['marks_input'] ?? '') : '' ?>">

                <label><strong>Chọn kiểu sắp xếp:</strong></label><br><br>
                <label style="font-size:18px; margin-right:30px;">
                    <input type="radio" name="sort_type" value="asc" required 
                           <?= (isset($_POST['sort_type']) && $_POST['sort_type']==='asc') ? 'checked' : '' ?>>
                    Tăng dần (sort)
                </label>
                <label style="font-size:18px;">
                    <input type="radio" name="sort_type" value="desc" required 
                           <?= (isset($_POST['sort_type']) && $_POST['sort_type']==='desc') ? 'checked' : '' ?>>
                    Giảm dần (rsort)
                </label>

                <br><br>
                <button type="submit">SẮP XẾP NGAY</button>
            </form>

            <div class="note">
                Cho phép tất cả số: âm, dương, 0, lớn hơn 10, số thực, trùng nhau<br>
                Ví dụ: -50, 3.14, 0, 999, -7.5, 1000, 5, 5, -2.718
            </div>

            <!-- LỖI -->
            <?php if (!empty($errors)): ?>
                <div class="result-box" style="background:#ffebee; border-left:6px solid #e74c3c;">
                    <strong>CÓ LỖI:</strong>
                    <ul style="margin:15px 0; text-align:left;">
                        <?php foreach ($errors as $e) echo "<li>$e</li>"; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <!-- KẾT QUẢ -->
            <?php if ($success && !empty($marks)): ?>
                <div class="result-box">
                    <strong>Mảng gốc:</strong><br>
                    <span class="highlight">[ <?= implode(' , ', $marks) ?> ]</span>
                </div>

                <div class="result-box" style="background:#e8f5e8; border-left:6px solid #4caf50;">
                    <strong>Kết quả sắp xếp <?= $sortType ?>:</strong><br>
                    <span style="font-size:26px; color:#2e7d32;">
                        [ <?= implode(' , ', $sorted) ?> ]
                    </span>
                </div>

                <table>
                    <tr><th>STT</th><th>Giá trị gốc</th><th>Giá trị đã sắp xếp</th></tr>
                    <?php foreach ($marks as $i => $val): ?>
                    <tr>
                        <td><?= $i + 1 ?></td>
                        <td><strong><?= $val ?></strong></td>
                        <td style="background:#e8f5e8; font-weight:bold; color:#2e7d32;">
                            <?= $sorted[$i] ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>

                <!-- <div class="result-box">
                    <strong>Thống kê:</strong><br>
                    • Tổng: <span class="highlight"><?= array_sum($sorted) ?></span><br>
                    • Max: <span class="highlight"><?= max($sorted) ?></span><br>
                    • Min: <span class="highlight"><?= min($sorted) ?></span><br>
                    • Trung bình: <span class="highlight"><?= round(array_sum($sorted)/count($sorted), 4) ?></span>
                </div> -->
            <?php endif; ?>
        </div>
    </div>
</body>
</html>