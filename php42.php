<?php

function returnMiddle($array)
{
    echo ($array[floor((count($array) - 1) / 2)] . "\n");
}

returnMiddle([1, 4, 2, 1, 6, 2, 4]);

/* Return the index in the middle of the given array */