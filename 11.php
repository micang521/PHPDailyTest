<?php

$str = "student. a am I";
function test($str){
    $arr = [];
    $len = strlen($str);
    for ($i=0;$i<$len;$i++){
        if(isset($arr[$str[$i]])){
            $arr[$str[$i]]++;
        }
        else{
            $str1 = strrev($str);
            return $str1;
        }
    }
}
print_r(test($str));
