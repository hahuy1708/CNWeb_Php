<?php
require_once("csdl.php");

$sql = "SELECT * FROM nhanvien";

$keyword = isset($_GET['keyword']) ? trim($_GET['keyword']) : '';

if ($keyword != '') {
    $sql .= " WHERE Hoten LIKE '%$keyword%' OR IDNV LIKE '%$keyword%'";
}

$result = mysqli_query($link, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tìm kiếm nhân viên</title>
</head>
<body>

<h2>Tìm kiếm nhân viên</h2>

<form method="GET" action="xemthongtinnv.php">
    <input type="text" name="keyword" placeholder="Nhập tên hoặc mã nhân viên" value="<?php echo htmlspecialchars($keyword); ?>">
    <input type="submit" value="Tìm">
</form>

<br>

<table border="1" width="100%">
    <caption>Danh sách nhân viên</caption>
    <tr>
        <th>Mã</th>
        <th>Tên</th>
        <th>Mã phòng ban</th>
        <th>Địa chỉ</th>
    </tr>

    <?php while($row = mysqli_fetch_array($result, MYSQLI_BOTH)) { ?>
        <tr>
            <td><?php echo $row['IDNV']; ?></td>
            <td><?php echo $row['Hoten']; ?></td>
            <td><?php echo $row['IDPB']; ?></td>
            <td><?php echo $row['Diachi']; ?></td>
        </tr>
    <?php } ?>

</table>

<?php
mysqli_free_result($result);
mysqli_close($link);
?>

</body>
</html>
