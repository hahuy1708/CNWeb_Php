<?php
require_once("csdl.php");

$IDNV = $_GET['IDNV'];

$stmt = $link->prepare("DELETE FROM nhanvien WHERE IDNV = ?");
$stmt->bind_param("s", $IDNV);

$thongbao = "";

if ($stmt->execute()) {
    $thongbao = "Xoá thành công! <a href='xoa.php'>Quay lại danh sách</a>";
} else {
    $thongbao = "Lỗi khi xoá: " . $stmt->error;
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thông báo</title>
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
</body>
</html>

