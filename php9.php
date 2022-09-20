<?php


function arrayUnion($array1, $array2)
{
    $union = [];

    for ($i = 0; $i < count($array1); $i++) {
        if (!in_array($array1[$i], $union)) array_push($union, $array1[$i]);
    }

    for ($i = 0; $i < count($array2); $i++) {
        if (!in_array($array2[$i], $union)) array_push($union, $array2[$i]);
    }

    print_r($union);
}

function arrayUnion2($array1, $array2)
{
    $union = $array1 + $array2;
    print_r(array_unique($union));
}

arrayUnion([1, 1, 2, 3, 4], [1]);

/* Cretae a function that returns the union of 2 arrays without any object similar on it */