<?php include 'header.php'; ?>
<h2>Bài 2: Ghi nội dung vào file note.txt (nối tiếp)</h2>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['noidung'])) {
    $data = "[" . date('d/m/Y H:i:s') . "] " . trim($_POST['noidung']) . PHP_EOL . PHP_EOL;
    file_put_contents('note.txt', $data, FILE_APPEND | LOCK_EX);
    echo "<p class='success'>Đã ghi thành công!</p>";
}
?>

<form method="post">
    <textarea name="noidung" placeholder="Nhập nội dung..." required style="width:100%;height:100px;"></textarea><br><br>
    <button type="submit" style="padding:10px 20px;font-size:16px;">Ghi vào file</button>
</form>

<hr>
<h3>Nội dung hiện tại của note.txt:</h3>
<?php
if (file_exists('note.txt')) {
    echo "<pre>" . htmlspecialchars(file_get_contents('note.txt')) . "</pre>";
}
?>
<?php include 'footer.php'; ?>