<?php
session_start();
session_destroy();

// Xóa cookie remember
setcookie('remember_user', '', time() - 3600, "/");

header("Location: index.php");
exit();
