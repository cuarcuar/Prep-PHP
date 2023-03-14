<?php

function car($a,$b){
    return $a < $b ? $a . " first \n" : $a . " last \n";
}


function cdr($a,$b){
    return $a < $b ? $b . " last \n" : $b . " first \n";
}

$a = random_int(0,100);
$b = random_int(0,100);

print_r($a);
print("\n");

print_r($b);
print("\n");

print(car($a,$b));
print(cdr($a,$b));
