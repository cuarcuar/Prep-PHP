<?php

function returnMaths($number1, $number2)
{
    echo ("Adding $number1 to $number2 is equals to " . $number1 + $number2 . "\n");
    echo ("Remainning $number1 to $number2 is equals to " . $number1 - $number2 . "\n");
    echo ("Multiplying $number1 to $number2 is equals to " . $number1 * $number2 . "\n");
    echo ("Dividing $number1 to $number2 is equals to " . $number1 / $number2 . "\n");
}

returnMaths(3, 5);


/* Return all the basic math operations for the given numbers */