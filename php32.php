<?php

function powElements($exponent, $array)
{
    for ($i = 0; $i < count($array); $i++) {
        $array[$i] = pow($array[$i], $exponent);
    }

    print_r($array);
}

powElements(3, [1, 2, 3]);

/* pow every number on the given array with the given number */