<?php

function drawTriangle($number)
{
    $triangle = "";
    $oneBefore = 0;
    $oneAfter = 0;
    for ($i = 1; $i <= $number; $i++) {
        for ($j = 1; $j < $number * 2; $j++) {
            if ($i == 1) {
                $triangle .= $j != $number ? ' ' : '*';
            } else if ($i == $number) {
                $triangle .= '*';
            } else {
                $triangle .= $j >= $oneBefore && $j <= $oneAfter ? '*' : ' ';
            }
        }
        $oneBefore = $oneBefore == 0 ? $number - 1 : $oneBefore - 1;
        $oneAfter = $oneAfter == 0 ? $number + 1 : $oneAfter + 1;
        $triangle .= "\n";
    }
    exit($triangle);
}

drawTriangle(5);

/* Draw a triangle with the given number */