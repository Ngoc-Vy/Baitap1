<?php
$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'POST') {
    $input = $_POST;
} else {
    $input = $_GET;
}

$noidung = $_REQUEST['noidung'];

if ($noidung === '') {
    echo 'Vui lòng nhập nội dung!';
    exit;
}

echo 'Bạn đã gửi phương thức ' . htmlspecialchars($_SERVER['REQUEST_METHOD'], ENT_QUOTES, 'UTF-8')
    . ' và nội dung: ' . htmlspecialchars($noidung, ENT_QUOTES, 'UTF-8');
?>