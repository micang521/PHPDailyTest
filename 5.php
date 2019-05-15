<?php
$arr = [1,2,3,4,5,6];
$arr1 = [];
$arr2 = [];
foreach ($arr as $key=>$val){
    if($val%2==1){
        $arr1[] = $val;
    }
    else{
        $arr2[] = $val;
    }
}
print_r(array_merge($arr1,$arr2));
