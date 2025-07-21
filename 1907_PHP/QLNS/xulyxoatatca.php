<?php

require_once("csdl.php");

$thongbao = "";

if (isset($_POST['IDNV']) && trim($_POST['IDNV']) !== "") {
    // Lấy danh sách IDNV từ form, phân tách thành mảng
    $idnv_list = explode(',', $_POST['IDNV']);
    $placeholders = implode(',', array_fill(0, count($idnv_list), '?'));

    // Tạo câu lệnh xóa với prepared statement
    $sql = "DELETE FROM nhanvien WHERE IDNV IN ($placeholders)";
    $stmt = $link->prepare($sql);

    // Tạo kiểu dữ liệu cho bind_param
    $types = str_repeat('s', count($idnv_list));
    $stmt->bind_param($types, ...$idnv_list);

    if ($stmt->execute()) {
        $thongbao = "✅ Đã xoá thành công các nhân viên đã chọn! <a href='xoatatca.php'>Quay lại danh sách</a>";
    } else {
        $thongbao = "❌ Lỗi khi xoá: " . $stmt->error;
    }
    $stmt->close();
} else {
    $thongbao = "❌ Không có nhân viên nào được chọn để xoá. <a href='xoatatca.php'>Quay lại</a>";
}

$link->close();
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thông báo xoá nhân viên</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .msg {
            margin: 50px auto;
            max-width: 600px;
            padding: 20px;
            background-color: #f1f8e9;
            border: 1px solid #c5e1a5;
            border-radius: 8px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="msg">
        <?php echo $thongbao; ?>
    </div>
    <br>
    <a href="home.php">Quay lại trang