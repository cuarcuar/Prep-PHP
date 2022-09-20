<?php

function square($number)
{
    $firstLast = str_repeat("*", $number);
    $rows = "";
    $squareGenerated = "";

    for ($i = 1; $i <= $number; $i++) {
        if ($i == 1 || $i == $number) {
            $rows = $rows . "*";
        } else {
            $rows = $rows . " ";
        }
    }

    for ($i = 1; $i <= $number; $i++) {
        if ($i == 1 || $i == $number) {
            $squareGenerated = $squareGenerated . "$firstLast\n";
        } else {
            $squareGenerated = $squareGenerated . "$rows\n";
        }
    }

    exit($squareGenerated);
}

square(20);

/* Make a square of * only */