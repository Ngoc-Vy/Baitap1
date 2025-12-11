<?php
function fibonacci($n){
    if($n <= 1) return $n;
    return fibonacci($n - 1) + fibonacci($n - 2);
}

function drawShape($n, $type){
    $result = "";

    if($type == "vuong"){
        for($i = 1; $i <= $n; $i++){
            $result .= str_repeat("*", $i) . "<br>";
        }
    }

    else if($type == "can"){
        for($i = 1; $i <= $n; $i++){
            $result .= str_repeat("&nbsp;", $n - $i);
            $result .= str_repeat("*", 2*$i - 1) . "<br>";
        }
    }

    else if($type == "rong"){
        for($i = 1; $i <= $n; $i++){
            for($j = 1; $j <= $n; $j++){
                if($i == 1 || $i == $n || $j == 1 || $j == $n){
                    $result .= "*";
                } else {
                    $result .= "&nbsp;&nbsp;";
                }
            }
            $result .= "<br>";
        }
    }

    return $result;
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Kết quả</title>
    <link rel="stylesheet" href="b2.css">
</head>
<body>

<div class="container">
    <h1>Kết quả</h1>

    <?php
    $mode = $_POST['mode'];

    if($mode === "fibo"){
        $n = $_POST['n_fibo'];

        echo "<h2>Bảng Fibonacci 1 → $n</h2>";
        echo "<table border='1' cellpadding='6'><tr><th>STT</th><th>Giá trị</th></tr>";

        for($i = 1; $i <= $n; $i++){
            echo "<tr><td>$i</td><td>" . fibonacci($i) . "</td></tr>";
        }
        echo "</table>";
    }

    if($mode === "shape"){
        $n = $_POST['n_shape'];
        $shape = $_POST['shape'];

        echo "<h2>Hình được vẽ</h2>";
        echo "<pre>" . drawShape($n, $shape) . "</pre>";
    }
    ?>
</div>

</body>
</html>
