<?php

function renewWord($word)
{
    $upperCount = 0;
    $lowerCount = 0;

    for ($i = 0; $i < strlen($word); $i++) {
        ctype_upper($word[$i]) ? $upperCount += 1 : $lowerCount += 1;
    }
    
    $upperCount > $lowerCount ? exit(strtoupper($word)) : exit(strtolower($word));
}


renewWord("HOLa");

/* Change the given sentence by the quantity of upper and lower letters */