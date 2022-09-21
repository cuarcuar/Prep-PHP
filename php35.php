<?php

function firstLast($array)
{
    print_r([$array[0], $array[count($array)-1]]);
}

firstLast([1, 2, 3]);

/* Get the first and last value on the given array */