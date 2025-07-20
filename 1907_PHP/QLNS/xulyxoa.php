<?php
require_once("csdl.php");

$IDNV = $_GET['IDNV'];

$stmt = $link->prepare("DELETE FROM nhanvien WHERE IDNV = ?");
$stmt->bind_param("s", $IDNV);

if ($stmt->execute()) {
    echo "Xoá thành công! <a href='xoa.php'>Quay lại danh sách</a>";
} else {
    echo "Lỗi khi xoá: " . $stmt->error;
}
?>
