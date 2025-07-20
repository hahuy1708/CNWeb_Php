<?php
require_once("csdl.php");

$sql = "SELECT * FROM phongban";

$keyword = isset($_GET['keyword']) ? trim($_GET['keyword']) : '';

if ($keyword != '') {
    $sql .= " WHERE TenPB LIKE '%$keyword%' OR IDPB LIKE '%$keyword%'";
}

$result = mysqli_query($link, $sql);

echo "<table border='1' width='100%'>";
echo "<caption>Danh sách phòng ban</caption>";
echo "<tr><th>Mã</th><th>Tên phòng ban</th><th>Mô tả</th><th>Xem chi tiết</th></tr>"; 

while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
    echo '<tr>
            <td>' . $row['IDPB'] . '</td>
            <td>' . $row['TenPB'] . '</td>
            <td>' . $row['Mota'] . '</td>
            <td><a href="xemthongtinnvpb.php?IDPB=' . $row['IDPB'] . '">Xem chi tiết</a></td>
          </tr>';
}
echo "</table>";

mysqli_free_result($result);
mysqli_close($link);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tìm kiếm nhân viên</title>
</head>
<body>

<h2>Tìm kiếm phòng ban</h2>

<form method="GET" action="xemthongtinpb.php">
    <input type="text" name="keyword" placeholder="Nhập tên hoặc mã phòng ban" value="<?php echo htmlspecialchars($keyword); ?>">
    <input type="submit" value="Tìm">
</form>

</body>
</html>
