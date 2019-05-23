<?php

$str = "student. a am I";
function test($str){
    $arr = explode(" ",$str);
    $arr1 = array_reverse($arr);
    $arr2 = implode($arr1," ");
    return $arr2;
}
print_r(test($str));
