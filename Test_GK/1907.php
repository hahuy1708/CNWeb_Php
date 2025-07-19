<?php
for($x = 1; $x <= 2; $x++){
    for($y = 1; $y <= 3; $y++){
        if($x == $y) continue;
        print("x = $x, y = $y\n");
        
    }
}
echo "<br>";
echo "--------------------------------------------------------------";
echo "<br>";
?>
<?php
$b = false;
if($b = true)
    print("true");
else
    print("false");
echo "<br>";
echo "--------------------------------------------------------------";
echo "<br>";
?>
<?php
$array = array("a1" => 'x', "a2" => 'e', "a3" => 'z');
ksort($array);
foreach($array as $key => $value){
    print "$key = $value\n";
}
echo "<br>";
echo "--------------------------------------------------------------";
echo "<br>";
?>
<?php
function b($a = 4){
    $a =  $a / 2;
    return $a;
}
$a = 10;
b($a);
echo $a;
echo "<br>";
echo "--------------------------------------------------------------";
echo "<br>";
?>
<?php
$a = 1;
function test(){
    echo "a = $a"; // Lỗi: biến $a không tồn tại trong phạm vi của hàm do $a không là biến global
}
test();
echo "<br>";
echo "--------------------------------------------------------------";
echo "<br>";
?>
<?php
class A{
    static $word = "Hello";
    static function hello(){
        print static::$word;
    }
}
class B extends A{
    static $word = "byte";
}
B::hello(); 
echo "<br>";
echo "--------------------------------------------------------------";
echo "<br>";
?>
<?php
$result = 11 + 11 + 0x11;
echo "$result"; 
echo "<br>";
echo "--------------------------------------------------------------";
echo "<br>";
?>
<?php
class number{
    public $a = 10;
    public $b = 20;
    public $c = 30;
}
$number = new number();
foreach($number as $var => $value){
    echo "$value";
}
?>