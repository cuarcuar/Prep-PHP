<?php

use function PHPSTORM_META\map;

function findMostUsedChar($sentence){
    $map = array_count_values(str_split(str_replace(" ", "", $sentence)));
    arsort($map);
    exit("The most used char is " . array_keys($map)[0] . " with " . array_shift($map) . " times.");
}

findMostUsedChar("hola, como estas tu? bien gracias");

/* Return the most used char given a text */