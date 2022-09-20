<?php

function reverseNumber($number)
{
    $reversed = intval(strrev($number));
    $reversed = ($number <=> 0) * $reversed;
    exit("$reversed is the reverse of $number\n");
}

reverseNumber(-45);

/* Reverse the given number */