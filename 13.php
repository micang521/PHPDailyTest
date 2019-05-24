<?php
function test($num1,$num2){
    if($num2 == 0){
        return $num1;
    }

    $m = ($num1 ^ $num2);
    $n = ($num1 & $num2)/2;

    return ($m+$n);
}
print_r(test(9,2));