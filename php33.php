<?php

function inSecs($hour, $min, $sec)
{
    sleep(1);
    $hour = $min == 0 ? $hour += 1 : $hour;
    $min = $sec == 0 ? $min += 1 : $min;
    print_r("$hour : $min : $sec \n");
    return $sec == 59 ? inSecs($hour, $min, 0) : inSecs($hour, $min, $sec + 1);
}

inSecs($hour = date('h'), $min = date('i'), $sec = date('s'));

/* Create the clock as the normal one in real life */