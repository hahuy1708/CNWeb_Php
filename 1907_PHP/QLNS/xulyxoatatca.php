<?php
require_once("csdl.php");

$thongbao = "";
$count_xoa = 0;

$rs = mysqli_query($link, "SELECT IDNV FROM nhanvien");
while ($row = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
    $id = $row['IDNV'];
    // Nếu checkbox của nhân viên này được chọn
    if (isset($_REQUEST[$id])) {
        // Xoá nhân viên
        mysqli_query($link, "DELETE FROM nhanvien WHERE IDNV='$id'");
        $count_xoa++;
    }
}
mysqli_free_result($rs);
$link->close();

if ($count_xoa > 0) {
    $thongbao = "✅ Đã xoá thành công $count_xoa nhân viên đã chọn! <a href='xoatatca.php'>Quay lại danh sách</a>";
} else {
    $thongbao = "❌ Không có nhân viên nào được chọn để xoá. <a href='xoatatca.php'>Quay lại</a>";
}
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
    <a href="home.php">Quay lại trang chính</a>
</body>
</html>