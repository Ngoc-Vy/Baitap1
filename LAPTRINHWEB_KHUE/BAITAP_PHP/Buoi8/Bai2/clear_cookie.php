<?php
setcookie('visit_counter', '', time() - 3600, "/");
header("Location: visit_counter.php");
?>