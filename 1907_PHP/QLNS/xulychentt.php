<?php
require_once("csdl.php");

// Lấy dữ liệu từ form
$IDNV = $_POST['IDNV'];
$Hoten = $_POST['Hoten'];
$IDPB = $_POST['IDPB'];
$Diachi = $_POST['Diachi'];

$thongbao = "";

// Kiểm tra trùng IDNV
$checkSql = "SELECT * FROM nhanvien WHERE IDNV = ?";
$stmt = $link->prepare($checkSql);
$stmt->bind_param("s", $IDNV);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {

    $thongbao = "Mã nhân viên đã tồn tại. <a href='chenthongtin.php'>Thử lại</a>";
    exit();
}

// Thêm dữ liệu
$sql = "INSERT INTO nhanvien (IDNV, Hoten, IDPB, Diachi) VALUES (?, ?, ?, ?)";
$stmt = $link->prepare($sql);
$stmt->bind_param("ssss", $IDNV, $Hoten, $IDPB, $Diachi);

if ($stmt->execute()) {
    $thongbao = "Đã thêm nhân viên thành công. <a href='xemthongtinnv.php'>Về trang thông tin nhân viên</a>";
} else {
    $thongbao = "Lỗi: " . $stmt->error;
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
    <br>
    <a href="home.php">Quay lại trang chính</a>
</body>
</html>

