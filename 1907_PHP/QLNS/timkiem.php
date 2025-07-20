<?php
require_once("csdl.php");

$IDNV = isset($_GET['IDNV']) ? trim($_GET['IDNV']) : '';
$Hoten = isset($_GET['Hoten']) ? trim($_GET['Hoten']) : '';
$IDPB = isset($_GET['IDPB']) ? trim($_GET['IDPB']) : '';
$Diachi = isset($_GET['Diachi']) ? trim($_GET['Diachi']) : '';

$sql = "SELECT * FROM nhanvien WHERE 1";

if ($IDNV !== '') {
    $sql .= " AND IDNV LIKE '%$IDNV%'";
}
if ($Hoten !== '') {
    $sql .= " AND Hoten LIKE '%$Hoten%'";
}
if ($IDPB !== '') {
    $sql .= " AND IDPB LIKE '%$IDPB%'";
}
if ($Diachi !== '') {
    $sql .= " AND Diachi LIKE '%$Diachi%'";
}

$result = mysqli_query($link, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tìm kiếm nhân viên</title>
</head>
<body>

<h2>Tìm kiếm nhân viên</h2>

<form method="GET" action="timkiem.php">
    <label>Mã nhân viên:</label>
    <input type="text" name="IDNV" value="<?php echo htmlspecialchars($IDNV); ?>"><br><br>

    <label>Họ tên:</label>
    <input type="text" name="Hoten" value="<?php echo htmlspecialchars($Hoten); ?>"><br><br>

    <label>Mã phòng ban:</label>
    <input type="text" name="IDPB" value="<?php echo htmlspecialchars($IDPB); ?>"><br><br>

    <label>Địa chỉ:</label>
    <input type="text" name="Diachi" value="<?php echo htmlspecialchars($Diachi); ?>"><br><br>

    <input type="submit" value="Tìm kiếm">
</form>

<br>

<?php if (mysqli_num_rows($result) > 0) { ?>
    <table border="1" width="100%">
        <caption><strong>Danh sách nhân viên</strong></caption>
        <tr>
            <th>Mã</th>
            <th>Họ tên</th>
            <th>Mã phòng ban</th>
            <th>Địa chỉ</th>
        </tr>
        <?php while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
            <tr>
                <td><?php echo $row['IDNV']; ?></td>
                <td><?php echo $row['Hoten']; ?></td>
                <td><?php echo $row['IDPB']; ?></td>
                <td><?php echo $row['Diachi']; ?></td>
            </tr>
        <?php } ?>
    </table>
<?php } else { ?>
    <p>Không tìm thấy nhân viên nào phù hợp.</p>
<?php } ?>

<?php
mysqli_free_result($result);
mysqli_close($link);
?>

</body>
</html>
