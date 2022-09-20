<?php

function splitArray($array, $newLength)
{
    $arrayOfArrays = [];
    $auxArray = [];

    for ($i = 0; $i < count($array); $i++) {
        array_push($auxArray, $array[$i]);

        if (count($auxArray) == $newLength) {
            array_push($arrayOfArrays, $auxArray);
            $auxArray = [];
        }
    }

    if (count($auxArray) != 0) array_push($arrayOfArrays, $auxArray);


    print_r($arrayOfArrays);
}

splitArray([1, 2, 3, 4, 5, 6, 7], 3);

/* Split the given array by the given number */