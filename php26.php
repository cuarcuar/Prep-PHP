<?php

function fibonacciSeries($limit)
{
    $result = 0;
    $aux = 1;
    $sentence = [$result, $aux];
    for ($i = 2; $i < $limit; $i++) {
        $result = $sentence[$i - 1] + $sentence[$i - 2];
        array_push($sentence, $result);
    }

    print_r($sentence);
}

fibonacciSeries(10);

/* Make the fibonacci series until the quantity of the number given is the total of numbers on the series */