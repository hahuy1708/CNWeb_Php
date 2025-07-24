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
if($b = true) // Đây là phép gán, không phải so sánh
    print("true");
else
    print("false");
echo "<br>";
echo "--------------------------------------------------------------";
echo "<br>";
?>
<?php
$array = array("a1" => 'x', "a2" => 'e', "a3" => 'z');
ksort($array); // sắp xếp theo khoá key
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
echo $a; // In ra 10, vì biến $a trong hàm b() là một bản sao của biến $a bên ngoài
echo "<br>";
echo "--------------------------------------------------------------";
echo "<br>";
?>
<?php
//$a = 1;
//function test(){
//    echo "a = $a"; // Lỗi: biến $a không tồn tại trong phạm vi của hàm do $a không là biến global
//}
//test();
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
echo "<br>";
echo "--------------------------------------------------------------";
echo "<br>";
?>
<?php
$a = array(10,20,'0','10Helo','hello10');
echo array_sum($a);
echo "<br>";
echo "array_sum() sẽ cộng các giá trị số trong mảng, bỏ qua các giá trị không phải số";
echo "<br>";
echo "--------------------------------------------------------------";
echo "<br>";
?>
<?php
echo (int) '1234Billy';
echo "<br>";
echo "--------------------------------------------------------------";
echo "<br>";
?>
<?php
echo (int) 'Billy123'; // -> 0 vì chuỗi bắt đầu bằng chữ cái
echo "<br>";
echo "--------------------------------------------------------------";
echo "<br>";
?>
<?php
switch(1){
    case 1: print "one";
    case 2: print "two";
    default: print "default";
}
echo "<br>";
echo "--------------------------------------------------------------";  
echo "<br>";
?>  


