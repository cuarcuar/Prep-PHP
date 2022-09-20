<?php

function invertText($word)
{
    $newText = "";
    for ($i = strlen($word) - 1; $i >= 0; $i--) {
        $newText = $newText . $word[$i];
    }
    exit($newText . "\n");
}

function invertText2($word)
{
    exit(strrev($word) . "\n");
}

invertText("hola");

/* Create a function to invert the text */