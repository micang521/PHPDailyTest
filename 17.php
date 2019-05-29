<?php
$arr_A = [1,3,6,9];
$arr_B = [2,4,5,8,20];
function Combine($arr_A,$arr_B){
    $arr1 = array_merge($arr_A,$arr_B);
    $arr2 = array_multisort($arr1);
    return $arr2;
}
echo (Combine($arr_A,$arr_B));