<?php
function test($arr,$n){
    $len = count($arr);
    for($i=0;$i<$len;$i++){
        $len1 = count($arr[$i]);
        for($j=0;$j<$len1;$j++){
            if($arr[$i][$j] == $n){
                return $n;
            }
        }
    }
    return false;
}

$arr = [[1,2,3],[4,5,6,],[7,8,9,"a"]];
$res = test($arr,"6");
var_dump($res);
echo "<br>";

$str = "Hello world It's a beautiful day";
function test1($str){
    $str1 = explode(" ",$str);
    return $str1;
}
print_r(test1($str));
echo "<br>";

$array = array('hello','world','!');
function test2($array){
    $array1 = implode(" ",$array);
    return $array1;
}
print_r(test2($array));
echo "<br>";

$str = "1234567890";
function test3($str){
    $str1 = number_format($str);
    return $str1;
}
print_r(test3($str));

