<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6 Bài Tập PHP - Xử Lý File</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        :root { --primary:#6366f1; --success:#10b981; --warning:#f59e0b; --dark:#1e293b; }
        * { margin:0; padding:0; box-sizing:border-box; }
        body { 
            font-family:'Segoe UI',sans-serif; 
            background:linear-gradient(135deg,#667eea,#764ba2); 
            min-height:100vh; 
            color:#333; 
        }
        header { 
            background:rgba(255,255,255,0.95); 
            backdrop-filter:blur(15px); 
            padding:30px; 
            text-align:center; 
            box-shadow:0 10px 30px rgba(0,0,0,0.2); 
            border-radius:0 0 25px 25px; 
        }
        header h1 { 
            font-size:3rem; 
            background:linear-gradient(90deg,#6366f1,#8b5cf6); 
            -webkit-background-clip:text; 
            -webkit-text-fill-color:transparent; 
        }
        nav { 
            background:#1e293b; 
            padding:20px 0; 
            text-align:center; 
            position:sticky; 
            top:0; 
            z-index:100; 
            box-shadow:0 5px 15px rgba(0,0,0,0.3); 
        }
        nav a { 
            color:white; 
            margin:0 25px; 
            padding:12px 28px; 
            border-radius:50px; 
            text-decoration:none; 
            font-weight:600; 
            transition:0.4s; 
        }
        nav a:hover { 
            background:var(--primary); 
            transform:translateY(-5px); 
            box-shadow:0 10px 25px rgba(99,102,241,0.5); 
        }
        .container { max-width:1400px; margin:0 auto; padding:40px 20px; }

        h2 { text-align:center; font-size:2.5rem; color:white; margin:50px 0; text-shadow:0 5px 15px rgba(0,0,0,0.4); }

        .three-columns { display:grid; grid-template-columns:repeat(3,1fr); gap:35px; margin:50px 0 }
        @media (max-width:992px) { .three-columns { grid-template-columns:1fr } }

        .card { background:white; border-radius:20px; overflow:hidden; box-shadow:0 20px 50px rgba(0,0,0,0.2); transition:.4s }
        .card:hover { transform:translateY(-15px) }
        .card-header { padding:35px; color:white; text-align:center; font-size:1.6rem; font-weight:bold }
        .card-header i { font-size:4rem; margin-bottom:20px; opacity:0.9 }
        .card-1 .card-header { background:linear-gradient(135deg,#56ab2f,#a8e6cf) }
        .card-2 .card-header { background:linear-gradient(135deg,#2196f3,#89f7fe) }
        .card-3 .card-header { background:linear-gradient(135deg,#f39c12,#ffd89b) }
        .card-body { padding:35px; background:#f8fafc; min-height:400px; overflow-y:auto }
        pre { background:#1e293b; color:#a9ffb6; padding:25px; border-radius:15px; font-size:15px; white-space:pre-wrap; box-shadow:inset 0 5px 15px rgba(0,0,0,0.4) }
        table { width:100%; border-collapse:collapse; background:white; border-radius:15px; overflow:hidden; box-shadow:0 10px 30px rgba(0,0,0,0.1) }
        th { background:var(--dark); color:white; padding:18px }
        td { padding:15px; border-bottom:1px solid #eee }
        ol { padding-left:50px }
        ol li { margin:15px 0; padding:12px; background:white; border-radius:10px; box-shadow:0 3px 10px rgba(0,0,0,0.1) }

        .error { background:#ffebee; color:#c62828; padding:25px; border-radius:15px; text-align:center; font-weight:bold; font-size:1.3rem; border:3px solid #ef5350 }
        footer { background:#1e293b; color:white; text-align:center; padding:50px; margin-top:100px; font-size:1.2rem }
    </style>
</head>
<body>

<header>
    <h1>6 Bài Tập PHP – Xử Lý File</h1>
    <p>Code đẹp – Điểm cao – Thầy cô mê</p>
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="read.php">Bài 1</a>
    <a href="write.php">Bài 2</a>
    <a href="list.php">Bài 3</a>
    <a href="upload.php">Bài 4</a>
    <a href="upload-img.php">Bài 6</a>
</nav>

<div class="container">