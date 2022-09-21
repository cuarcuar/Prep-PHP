<?php

function isPermutation($numbersArray, $limit, $i = 0)
{
    if ($limit == $i && count($numbersArray) - 1 == $limit) exit("true");
    $numbersArray[$i] == $i ? isPermutation($numbersArray, $limit, $i + 1) : exit("false");
}

isPermutation([0, 1, 3], 3);

/* review if its permutation. Its permutation when the array is consecutive until the limit one by one. */