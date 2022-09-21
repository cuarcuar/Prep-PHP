<?php

function countVocals($sentence)
{
    $regex = "/[aeiou]/i";
    print_r("The sentence \" $sentence  \" has " . preg_match_all($regex, $sentence) . " vocals on it.\n");
}

countVocals("hola, como ESTAS?");

/* Create a function that returns how many vocals are on a sentence */