<?php

function dividerNumbers($number, $i = 1)
{
    if (is_int($number / $i)) echo ("$i \n");

    $i < $number ? dividerNumbers($number, $i + 1) : exit();
}

dividerNumbers(10);

/* Find all divider numbers of a given number */