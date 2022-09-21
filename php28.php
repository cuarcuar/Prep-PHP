<?php

function generateFactory($number)
{
    $result = $number;

    for ($i = $number; $i > 1; $i--) {
        $result = $result * ($i - 1);
    }

    print_r($result);
}

generateFactory(5);

/* Make the factory of the given number */