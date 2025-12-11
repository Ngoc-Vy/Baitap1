<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Mảng Màu - Có Reset</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">QUẢN LÝ MẢNG MÀU</div>
        
        <div class="content">
            <?php
            $colors = $_POST['colors'] ?? [];
            $errors = [];

            // XỬ LÝ RESET
            if (isset($_POST['reset'])) {
                $colors = [];  // Xóa sạch mảng
            }

            // XỬ LÝ THÊM & XÓA
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_POST['reset'])) {
                $newColor    = trim($_POST['newcolor'] ?? '');
                $deleteIndex = $_POST['deleteindex'] ?? '';

                // Thêm màu mới
                if (!empty($newColor)) {
                    if (!preg_match('/^[a-zA-Z0-9\s\-#()rgbRGB%,.]+$/u', $newColor)) {
                        $errors[] = "Tên màu \"$newColor\" chứa ký tự không hợp lệ!";
                    } else {
                        $colors[] = $newColor;
                    }
                }

                // Xóa theo vị trí
                if ($deleteIndex !== '') {
                    if (!is_numeric($deleteIndex) || $deleteIndex < 0) {
                        $errors[] = "Vị trí xóa phải là số ≥ 0!";
                    } elseif (isset($colors[$deleteIndex])) {
                        unset($colors[$deleteIndex]);
                        $colors = array_values($colors);  // Reset index
                    }
                }
            }
            ?>

            <form method="POST">
                <!-- Giữ lại mảng hiện tại -->
                <?php foreach ($colors as $i => $c): ?>
                    <input type="hidden" name="colors[<?= $i ?>]" value="<?= htmlspecialchars($c) ?>">
                <?php endforeach; ?>

                <label for="newcolor">Nhập tên màu mới để thêm:</label>
                <input type="text" name="newcolor" id="newcolor" 
                       placeholder="Ví dụ: red, #00ff00, rgb(255,100,0), light-blue">

                <label for="deleteindex">Nhập vị trí muốn xóa (0, 1, 2...):</label>
                <input type="number" name="deleteindex" id="deleteindex" min="0" 
                       placeholder="Để trống nếu không xóa">

                <button type="submit">THỰC HIỆN</button>
            </form>

            <!-- NÚT RESET SIÊU ĐỎ -->
            <?php if (!empty($colors)): ?>
            <form method="POST" style="margin-top:15px;">
                <button type="submit" name="reset" 
                        style="background:#e74c3c; box-shadow:0 8px 25px rgba(231,76,60,0.5);">
                    RESET 
                </button>
            </form>
            <?php endif; ?>

            <div class="note">
                Gợi ý: red, blue, #ff6600, rgb(0,255,0), purple, pink, orange, light-blue, dark-red<br>
                Bấm <strong>RESET</strong> để xóa sạch và làm lại từ đầu!
            </div>

            <!-- LỖI -->
            <?php if (!empty($errors)): ?>
                <div class="result-box" style="background:#ffebee; border-left:6px solid #e74c3c;">
                    <strong>LỖI:</strong>
                    <ul style="margin:15px 0; text-align:left;">
                        <?php foreach ($errors as $e) echo "<li>$e</li>"; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <!-- HIỂN THỊ MẢNG -->
            <div class="result-box">
                <strong>Mảng màu hiện tại (<?= count($colors) ?> màu):</strong><br><br>
                <?php if (empty($colors)): ?>
                    <em style="color:#999; font-size:22px;">Mảng rỗng! Hãy thêm màu đầu tiên</em>
                <?php else: ?>
                    <div style="display:flex; flex-wrap:wrap; gap:20px; justify-content:center; margin:25px 0;">
                        <?php foreach ($colors as $i => $c): ?>
                            <div style="text-align:center;">
                                <div class="color-box" style="background:<?= htmlspecialchars($c) ?>"></div>
                                <div style="margin-top:10px; font-weight:600;">
                                    [<?= $i ?>] <?= htmlspecialchars($c) ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- BẢNG CHI TIẾT -->
            <?php if (!empty($colors)): ?>
            <table>
                <tr><th>STT</th><th>Tên màu</th><th>Hiển thị</th></tr>
                <?php foreach ($colors as $i => $c): ?>
                <tr>
                    <td><strong><?= $i ?></strong></td>
                    <td><?= htmlspecialchars($c) ?></td>
                    <td>
                        <div style="background:<?= htmlspecialchars($c) ?>; width:100%; height:60px; border-radius:12px; border:3px solid #fff; box-shadow:0 4px 10px rgba(0,0,0,0.2);"></div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>