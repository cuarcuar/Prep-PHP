<?php

function generateSubstrs($word)
{
    $newSubstrsArray = [];
    for ($i = 0; $i <= strlen($word); $i++) {
        for ($j = 0; $j <= strlen($word); $j++) {
            array_push($newSubstrsArray, substr($word, $i, $j));
        }
    }

    print_r(array_unique($newSubstrsArray));
}

generateSubstrs("hola");

/* Generate an array of all the substrs possibles on the main word */