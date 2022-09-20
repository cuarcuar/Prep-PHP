<?php

function duplicateString($word, $times)
{
    echo ($word);
    $times == 1 ? exit() : duplicateString($word, $times - 1);
}

function duplicateString2($word, $times)
{
    echo (str_repeat($word, $times));
}

duplicateString("hola", 5);

/* Duplicate n times a string given */