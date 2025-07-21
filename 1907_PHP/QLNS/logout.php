<?php
session_start();
session_unset();  // Xoá toàn bộ biến session
session_destroy(); // Hủy session hiện tại

header("Location: login.php");
exit();
?>
