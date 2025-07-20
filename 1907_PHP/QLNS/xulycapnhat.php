<?php
require_once("csdl.php");

$IDPB = $_POST['IDPB'];
$TenPB = $_POST['TenPB'];
$Mota = $_POST['MoTa'];

$stmt = $link->prepare("UPDATE phongban SET TenPB = ?, MoTa = ? WHERE IDPB = ?");
$stmt->bind_param("sss", $TenPB, $Mota, $IDPB);

$thongbao = "";
if ($stmt->execute()) {
    $thongbao = "✅ Cập nhật thành công! <a href='capnhat.php'>Quay lại danh sách</a>";
} else {
    $thongbao = "❌ Lỗi khi cập nhật: " . $stmt->error;
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
