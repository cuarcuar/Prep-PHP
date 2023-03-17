<?php

function decodeNumber($number)
{

    $result = 0;
    $numberArray = str_split($number);

    if (array_search(0, $numberArray)) return "Impossible to decode \n";

    if (count($numberArray) == 1 ) return 1 . "\n";

    for ($i = 0; $i < count($numberArray); $i++) {
        if ($numberArray[$i] == 1) {

            $result += is_numeric($numberArray[$i + 1]) ? 2 : 0;
        } else if ($numberArray[$i] == 2) {

            $result += is_numeric($numberArray[$i + 1]) && $numberArray[$i + 1] <= 6 ? 2 : 0;
        }
    }

    return $result . "\n";
}

$number = random_int(1, 1000000);

print_r($number . "\n");

print_r(decodeNumber($number));
