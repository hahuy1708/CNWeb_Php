<?php
require_once("csdl.php");

// Lấy dữ liệu từ form
$IDNV = $_POST['IDNV'];
$Hoten = $_POST['Hoten'];
$IDPB = $_POST['IDPB'];
$Diachi = $_POST['Diachi'];

// Kiểm tra trùng IDNV
$checkSql = "SELECT * FROM nhanvien WHERE IDNV = ?";
$stmt = $link->prepare($checkSql);
$stmt->bind_param("s", $IDNV);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "Mã nhân viên đã tồn tại. <a href='chenthongtin.php'>Thử lại</a>";
    exit();
}

// Thêm dữ liệu
$sql = "INSERT INTO nhanvien (IDNV, Hoten, IDPB, Diachi) VALUES (?, ?, ?, ?)";
$stmt = $link->prepare($sql);
$stmt->bind_param("ssss", $IDNV, $Hoten, $IDPB, $Diachi);

if ($stmt->execute()) {
    echo "Đã thêm nhân viên thành công. <a href='xemthongtinnv.php'>Về trang thông tin nhân viên</a>";
} else {
    echo "Lỗi: " . $stmt->error;
}
?>
