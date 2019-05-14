<?php
for($i=100;$i<1000;$i++){
    $b = floor($i/100);
    $s = floor($i/10%10);
    $g = floor($i%10);
    if($i == pow($b,3)+pow($s,3)+pow($g,3)){
            echo $i . "<br>";
    }
}

function test($n){
    if($n<100 || $n>1000){
        return false;
    }
    $b = floor($n/100);
    $s = floor($n/10%10);
    $g = floor($n%10);
    if($n == pow($b,3)+pow($s,3)+pow($g,3)){
        return true;
    }
    else{
        return false;
    }
}
var_dump(test(234));

