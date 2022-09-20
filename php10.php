<?php

function generateStairs($number){
    $stairs = "";
    for ($i=1; $i <= $number ; $i++) { 
        for ($j=1; $j <= $i; $j++) { 
            $stairs = $stairs . "[-]";
        }
        $stairs = $stairs . "\n";
    }
    exit($stairs);
}

generateStairs(5);

/* Generate stairs deppending of the given number */
