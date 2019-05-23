<?php
$str = "5";
function Sum_Solution($str){
    $str = ($str-4)+($str-3)+($str-2)+($str-1)+($str);
    return $str;
}

print_r(Sum_Solution($str));