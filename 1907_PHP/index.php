<?php
$a = Array(
    "key1" => "value1",
    "key2" => "value2",
    "key3" => "value3",
    "key4" => "value4");
    echo $a["key1"];
    echo $a["key2"];
?>
<?php
    $a = "Xin chào";
    $b = "các bạn";
    $a = $a."tất cả";
    echo $a." ".$b;
    echo "<br>";
?>
<?php
$a = array("a" => 1, "b" => 2, "c" => 3);
foreach ($a as $key => $value) {
    echo $key. "=" . $value . ", ";
}
echo "<br>";
?>
<?php
for($i = 1; $i <= 10;$i++){
    if($i % 2 == 0){
        continue;
    }
    echo $i . " ";
}
?>


