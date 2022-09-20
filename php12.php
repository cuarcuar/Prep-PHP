<?php

function goingBack($num)
{
    if ($num >= 0) echo ("- $num \n");
    $num <= 0 ? exit("- 0\n") : goingBack($num - 8);
}

goingBack(20);

/* Create a series of numbers going backwards on jumps of 8's until they got to 0 without loops like for's*/