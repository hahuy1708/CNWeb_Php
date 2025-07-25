<?php
$string1 = "ab";
$string2 = "cd";
$string1 = $string1 . $string2;
$string3 = "abc";
$string1 .= $string3;
echo $string1; 
echo "<br>";
echo "--------------------------------------------------------------";
echo "<br>";
?>
<?php
$a = 5;
$b = 12;
$c = 10;
$d = 7;
$e = ($a * $b) + $c * $d / $a;
echo $e;
echo "<br>";
echo "--------------------------------------------------------------";
echo "<br>";  
?>
<?php
$str = 'val1,val2,val3,';
echo count(explode(',', $str));
?>

