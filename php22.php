<?php

function compareNumbers($number1, $number2){

    if($number1 == $number2) exit("The given numbers are equal\n");

    $number1 > $number2 ? exit("$number1 is greater than $number2\n") : exit("$number2 is greater than $number1\n");


}

compareNumbers(5,5);

/* From the given numbers compare it and return who is greater and minor */