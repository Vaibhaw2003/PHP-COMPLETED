<!-- <?php

function add($x, $y){
    $a = $x;
    $b = $y;
    $sum = $a +$b;
    echo $sum;
}


function diff($a, $b){
    $di = $a -$b;
    echo $di;
}


// 1. simple function. 
// 2. augument.
// 3. return types.

add(12,33);
diff(23,44);

?> -->

<!-- <?php
function adds($s, $v){
    $output = $s +$v;
    return $output;
}

$result =adds(23,45);

echo $result;

?> -->

<?php

function sum($a,$b){
    $result = $a + $b;
    return $result;
}

$out = sum(12,33);
echo $out;

$res = sum(33,44);
echo $res;
?>