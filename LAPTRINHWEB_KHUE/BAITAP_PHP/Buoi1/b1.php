<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập  - 1 File Duy Nhất</title>
    <style>
        body {font-family: Arial; text-align: center; margin-top: 50px; background: #f4f4f4;}
        .box {background: white; width: 600px; margin: 20px auto; padding: 30px; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);}
        h1 {color: #2c3e50;}
        .ketqua {font-size: 28px; margin: 25px 0; padding: 15px; border-radius: 10px;}
        .green {background: #d5f4e6; color: green;}
        .red   {background: #fadbd8; color: red;}
        .blue  {background: #d6eaf8; color: blue;}
        .orange{background: #fef5e7; color: #e67e22;}
    </style>
</head>
<body>

<div class="box">
    <h1> BÀI TẬP PHP CƠ BẢN </h1>

    <?php
    // ====================== BẠN CHỈ SỬA 3 DÒNG DƯỚI NÀY ======================
    $so       = 156;     // ← Số để kiểm tra chia hết cho 5 + chẵn lẻ
    $diem     = 7.8;     // ← Điểm trung bình (0 đến 10)
    // ====================================================================

    // Bài 1: Kiểm tra chia hết cho 5
    echo "<div class='ketqua'>";
    echo "1️ Số bạn kiểm tra: <b>$so</b><br>";
    if ($so % 5 == 0) {
        echo "<span class='green'>CHIA HẾT cho 5</span>";
    } else {
        echo "<span class='red'>KHÔNG chia hết cho 5</span>";
    }
    echo "</div>";

    // Bài 2: Kiểm tra chẵn lẻ
    echo "<div class='ketqua'>";
    echo "2️ Số <b>$so</b> là: ";
    if ($so % 2 == 0) {
        echo "<span class='blue'>SỐ CHẴN</span>";
    } else {
        echo "<span class='orange'>SỐ LẺ</span>";
    }
    echo "</div>";

    // Bài 3: Xếp loại học lực
    echo "<div class='ketqua'>";
    echo "3️ Điểm trung bình: <b>$diem</b> → Xếp loại: <b>";
    if ($diem >= 8.0) {
        echo "<span class='green'>GIỎI</span>";
    } elseif ($diem >= 6.5) {
        echo "<span class='blue'>KHÁ</span>";
    } elseif ($diem >= 5.0) {
        echo "<span class='orange'>TRUNG BÌNH</span>";
    } else {
        echo "<span class='red'>YẾU</span>";
    }
    echo "</b></div>";
    ?>

    <hr>
   
</div>

<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>