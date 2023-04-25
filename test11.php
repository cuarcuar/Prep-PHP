<?php

function getHighests($list, $k)
{

    $results = [];

    for ($i = 0; $i < count($list); $i++) {
        $auxArray = array_slice($list, $i, $k);

        if (count($auxArray) == 3) array_push($results, max($auxArray));
    }

    return $results;
}

$list = [10, 5, 2, 7, 8, 7];

print_r(getHighests($list, 3));
