<?php
function test($num){
    if($num < 0){
        return false;
    }
    while (true){
        if($num == 1){
            return true;
        }
        if($num%2==0){
            $num=$num/2;
        }
        elseif ($num%3==0){
            $num=$num/3;
        }
        elseif ($num%5==0){
            $num=$num/5;
        }
        else{
            return false;
        }
    }
}
$res = test(13);
var_dump($res);