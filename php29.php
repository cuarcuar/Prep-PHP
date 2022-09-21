<?php

function isCapicua($number)
{
    exit($number == strrev($number) ? "The given number is capicua" : "The given number is not capicua");
}

isCapicua(2002);

/* review if the given number is capicua */