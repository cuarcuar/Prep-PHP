<?php

function nonAdjacent($list)
{

    $incl = 0;
    $excl = 0;

    foreach ($list as $number) {
        $temp = $incl;
        $incl = max($incl, $excl + $number);
        $excl = $temp;
    }

    return max($incl, $excl);
}

print_r(nonAdjacent([1,2,5,6,8,0,2,1]));