<?php include 'header.php'; ?>
<h2>Bài 3: Hiển thị note.txt thành danh sách</h2>
<?php
if (file_exists('note.txt') && filesize('note.txt') > 0) {
    $lines = file('note.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    echo "<ul>";
    foreach ($lines as $line) {
        if (trim($line) != '') {
            echo "<li>" . htmlspecialchars($line) . "</li>";
        }
    }
    echo "</ul>";
} else {
    echo "<p>Chưa có dữ liệu trong note.txt. Vào <a href='write.php'>Bài 2</a> để ghi trước nhé!</p>";
}
?>
<?php include 'footer.php'; ?>