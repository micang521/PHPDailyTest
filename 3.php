<?php
function test($n){
    if($n <= 0){
        return 0;
    }
    if($n == 1 || $n == 2){
        return 1;
    }
    return test($n - 1) + test($n - 2);
}
var_dump(test(10));