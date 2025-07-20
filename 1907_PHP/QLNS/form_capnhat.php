<?php
require_once("csdl.php");

// Lấy IDPB từ URL
if (!isset($_GET['IDPB'])) {
    echo "Thiếu mã phòng ban.";
    exit();
}
$IDPB = $_GET['IDPB'];

// Lấy thông tin phòng ban cần cập nhật
$sql = "SELECT * FROM phongban WHERE IDPB = ?";
$stmt = $link->prepare($sql);
$stmt->bind_param("s", $IDPB);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows !== 1) {
    echo "Không tìm thấy phòng ban.";
    exit();
}
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Cập nhật phòng ban</title>
</head>
<body>
    <h2>Cập nhật thông tin phòng ban</h2>
    <form method="POST" action="xulycapnhat.php">
        <input type="hidden" name="IDPB" value="<?php echo htmlspecialchars($row['IDPB']); ?>">
        <label>Tên phòng ban:</label><br>
        <input type="text" name="TenPB" value="<?php echo htmlspecialchars($row['TenPB']); ?>" required><br><br>
        <label>Mô tả:</label><br>
        <input type="text" name="MoTa" value="<?php echo htmlspecialchars($row['Mota']); ?>" required><br><br>
        <button type="submit">Cập nhật</button>
    </form>
    <br>
    <a href="capnhat.php">Quay lại danh sách phòng ban</a>
</body>