<?php

function buzzLightyearSeries($number, $i = 1)
{
    if (is_int($i / 3) && is_int($i / 5)) {
        echo ("BuzzLighyear \n");
    } else if (is_int($i / 3)) {
        echo ("Buzz \n");
    } else if (is_int($i / 5)) {
        echo ("Lighyear \n");
    } else {
        echo ($i . "\n");
    }

    $i < $number ? buzzLightyearSeries($number, $i + 1) : exit();
}

buzzLightyearSeries(15);

/* Start a series to the given number, but when you found a %3 print Buzz, %5 print Lightyear and with both, print the complete name */