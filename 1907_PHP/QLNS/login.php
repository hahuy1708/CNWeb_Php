<?php
session_start();
if (isset($_SESSION['user'])) {
    header("Location: home.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Đăng nhập</h2>
    <form method="POST" action="xulylogin.php">
        <input type="text" name="username" required placeholder="Tên đăng nhập">
        <input type="password" name="password" required placeholder="Mật khẩu">
        <button type="submit">Đăng nhập</button>
    </form>
</body>
</html>
