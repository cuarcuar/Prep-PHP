<?php

function powElements($limit)
{
    $array = range(0, $limit);
    for ($i = 0; $i < count($array); $i++) {
        $array[$i] = $array[$i] ** 2;
    }

    print_r($array);
}

powElements(5);

/* pow every number on the array created with the limit of the given number */