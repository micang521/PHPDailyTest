<?php

function test($n){
    if($n<0){
        return 0;
    }
    else if($n == 1 || $n == 2){
        return $n;
    }
    return test($n - 1)+test($n - 2);
}
var_dump(test(4));