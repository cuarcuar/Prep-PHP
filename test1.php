<?php

function addUp($list, $k)
{
    for ($i = 0; $i < count($list); $i++) {
        for ($j = 1; $j < count($list)-1; $j++) {
            if ($list[$i] + $list[$j] == $k) return "true\n";
        }
    }

    return "false\n";
}

$list = [1,2,3,4];

print_r(addUp($list, 7));