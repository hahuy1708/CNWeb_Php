<?php

session_start();

require_once("csdl.php");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$stmt = $link->prepare($sql);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $_SESSION['user'] = $username;
    header("Location: home.php");
} else {
    echo "Sai tên đăng nhập hoặc mật khẩu. <a href='login.php'>Thử lại</a>";
}
?>
