<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
// Cách 1: Đọc toàn bộ file cùng lúc
$content = file_get_contents("vdfile.txt");
// In ra nội dung file 
echo"<h3>Nội dung file:</h3>";
echo nl2br($content); //đổi \n thành <br>

//Cách 2: Đọc từng dòng bằng fget()
$noidung = fopen("vdfile.txt","r"); //mở file để đọc
echo"<h3>Đọc từng dòng:</h3>";
while (!feof($noidung)) {
    $line = fgets($noidung);
    echo $line."<br>";
}
fclose($noidung); // đóng file

// Cách 3: Đọc file thành mảng các dòng 
$lines = file("vdfile.txt");
echo "<h3>Danh sách các dòng trong file:</h3>";
foreach ($lines as $index => $line) {
echo "Dòng " . ($index + 1) . ": " . $line . "<br>";
}

// Mở file (các mode phổ biến)
// r  = đọc (read)
// w  = ghi đè (write)
// a  = ghi thêm vào cuối (append)
// r+ = đọc + ghi (con trỏ đầu file)
// w+ = đọc + ghi (xóa cũ trước)
// a+ = đọc + ghi thêm

// Ghi file bằng fwrite()
echo "<h3>Ghi thêm vào file note.txt</h3>";
$handle = fopen('note.txt', 'a');
if ($handle) {
    fwrite($handle, "Đây là dòng được ghi lúc " . date('H:i:s d/m/Y') . "\n");
    echo "Đã ghi thành công vào note.txt<br>";
    fclose($handle);
    echo $line."<br>";
}

// Ghi file nhanh bằng file_put_contents
file_put_contents('log.txt', "Log lúc " . date('H:i:s') . " - Có người truy cập\n", FILE_APPEND);
echo "Đã ghi log thành công!";
echo $line."<br>";
?>
</body>
</html>

