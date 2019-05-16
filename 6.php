<?php
function test($m,$n){
    $count = 0;
    for($i=$m;$i<=$n;$i++){
        $count += substr_count($i,1);
    }
    return $count;
}
echo test(1,13);
echo "<br>";
echo test(100,1300);