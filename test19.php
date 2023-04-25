<?php

function editDistance($string1, $string2)
{

    $editDistance = 0;

    for ($i = 0; $i < ceil((strlen($string1) + strlen($string2)) / 2); $i++) {
        if ($string1[$i] != $string2[$i]) $editDistance += 1;
    }

    return $editDistance;
}

print_r(editDistance("kitten", "sitting") . "\n");
