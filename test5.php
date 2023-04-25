<?php

function decodeNumber($number)
{

    $result = 0;
    $numberArray = str_split($number);

    if (array_search(0, $numberArray)) return "Impossible to decode \n";

    if (count($numberArray) == 1) return 1 . "\n";

    for ($i = 0; $i < count($numberArray); $i++) {
        if ($numberArray[$i] == 1) {

            $result += is_numeric($numberArray[$i + 1]) ? 2 : 0;
        } else if ($numberArray[$i] == 2) {

            $result += is_numeric($numberArray[$i + 1]) && $numberArray[$i + 1] <= 6 ? 2 : 0;
        }
    }

    return $result . "\n";
}


function decodeNumber2($number)
{
    $result = 1;
    $list = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26];
    $separatedNumber = str_split($number);
    $auxNumber = 0;

    if (array_search(0, $separatedNumber)) return "Impossible to decode \n";

    for ($i = 0; $i < count($separatedNumber); $i++) {
        if ($separatedNumber[$i] == 1 && is_numeric($separatedNumber[$i + 1])) {
            $auxNumber = $separatedNumber[$i] . $separatedNumber[$i + 1];
            print($auxNumber);
            if (array_search($auxNumber, $list)) $result += 1;
        }
        if ($separatedNumber[$i] == 2 && is_numeric($separatedNumber[$i + 1])) {
            if ($separatedNumber[$i + 1] > 0 && $separatedNumber[$i + 1] <= 6) {
                $auxNumber = $separatedNumber[$i] . $separatedNumber[$i + 1];
                print($auxNumber);

                if (array_search($auxNumber, $list)) $result += 1;
            }
        }
    }

    return $result;
}

$number = random_int(1, 1000000);

print_r($number . "\n");

print_r(decodeNumber2($number));
