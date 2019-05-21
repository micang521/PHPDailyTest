<?php
$array = [2,4,3,6,3,2,5,5,];
function test($array){
    $arr = [];
    foreach ($array as $value){
        if(isset($arr[$value])){
            $arr[$value]++;
        }
        else{
            $arr[$value] =1;
        }
    }
    $once = [];
    foreach ($arr as $k=>$v){
        if($v == 1){
            $once[] = $k;
        }
    }
    return $once;
}
var_dump(test($array));