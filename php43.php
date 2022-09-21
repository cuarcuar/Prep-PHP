<?php

function generateStringsArray($array)
{
    $newArray = [];
    foreach ($array as $element) {
        if (count(explode(" ", $element)) > 1) array_push($newArray, $element);
    }

    print_r($newArray);
}

generateStringsArray(["hola", "hola como", "estas tu?", "nada"]);

/* Generate a new array by the number or strings on each element */