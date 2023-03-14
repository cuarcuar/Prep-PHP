<?php

function returnPositives($var)
{
    return $var >= 0;
}

function retrieveLowestPositive($list)
{
    $list = array_filter($list, "returnPositives");
    sort($list);

    for ($i = 0; $i < count($list); $i++) {
        if (
            $i == count($list) - 1 ||
            $list[$i] - ($list[$i + 1]) < -1

        ) return $list[$i] + 1 . "\n";
    }
}

$list = [3, 4, -1, 1];
$list1 = [1, 2, 0];
$list2 = [2, 3, 4, 6, 2, 1, 4, 6, 7];

print_r(retrieveLowestPositive($list2));
