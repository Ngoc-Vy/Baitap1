<?php include 'header.php'; ?>

<h2>Bài 1: Đọc file – So sánh 3 cách thực tế</h2>

<?php
$file_nho  = 'data.txt';
$file_lon  = 'data2.txt';
?>

<div class="three-columns">

    <!-- Cách 1: file_get_contents() → Dùng cho file lớn
    <div class="card card-1">
        <div class="card-header">
            <i class="fas fa-fire"></i><br>
            file_get_contents()<br><small>data2.txt (file lớn)</small>
        </div>
        <div class="card-body">
            <?php
            if (file_exists($file_lon)) {
                echo "<pre>" . htmlspecialchars(file_get_contents($file_lon)) . "</pre>";
            } else {
                echo "<div class='error'>Chưa có file data2.txt</div>";
            }
            ?>
        </div>
    </div>

    Cách 2: fopen + fgets() → Dùng cho file nhỏ (dễ thấy từng dòng)
    <div class="card card-2">
        <div class="card-header">
            <i class="fas fa-list-ol"></i><br>
            fopen + fgets()<br><small>data.txt (file nhỏ)</small>
        </div>
        <div class="card-body">
            <?php
            if (file_exists($file_nho)) {
                echo "<ol>";
                $fp = fopen($file_nho, 'r');
                while (!feof($fp)) {
                    $line = fgets($fp);
                    if (trim($line) !== '') echo "<li>" . htmlspecialchars($line) . "</li>";
                }
                fclose($fp);
                echo "</ol>";
            } else {
                echo "<div class='error'>Chưa có file data.txt</div>";
            }
            ?>
        </div>
    </div>

    Cách 3: file() → trả về mảng → Dùng cho file lớn
    <div class="card card-3">
        <div class="card-header">
            <i class="fas fa-th-list"></i><br>
            file() → mảng<br><small>data2.txt (file lớn)</small>
        </div>
        <div class="card-body">
            <?php
            if (file_exists($file_lon)) {
                $lines = file($file_lon, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                echo "<table><thead><tr><th>STT</th><th>Nội dung</th></tr></thead><tbody>";
                foreach ($lines as $i => $line) {
                    echo "<tr><td style='text-align:center;font-weight:bold;color:#6366f1;'>".($i+1)."</td><td>".htmlspecialchars($line)."</td></tr>";
                }
                echo "</tbody></table>";
            } else {
                echo "<div class='error'>Chưa có file data2.txt</div>";
            }
            ?>
        </div>
    </div>

</div>

<?php include 'footer.php'; ?>