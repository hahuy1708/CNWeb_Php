<?php
require_once("csdl.php");

$IDPB = $_POST['IDPB'];
$TenPB = $_POST['TenPB'];
$Mota = $_POST['MoTa'];

$stmt = $link->prepare("UPDATE phongban SET TenPB = ?, MoTa = ? WHERE IDPB = ?");
$stmt->bind_param("sss", $TenPB, $Mota, $IDPB);

if ($stmt->execute()) {
    echo "Cập nhật thành công! <a href='capnhat.php'>Quay lại danh sách</a>";
} else {
    echo "Lỗi khi cập nhật: " . $stmt->error;
}
?>
