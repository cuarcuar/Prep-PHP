<?php

function bracketsValidator($string)
{

    $stack = [];
    $open_brackets = ['(', '[', '{'];
    $close_brackets = [')', ']', '}'];

    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], $open_brackets)) {
            array_push($stack, $string[$i]);
        } else if (in_array($string[$i], $close_brackets)) {
            $j = array_search($string[$i], $close_brackets);
            if (count($stack) > 0 && $open_brackets[$j] == $stack[count($stack) - 1]) {
                array_pop($stack);
            } else {
                return false;
            }
        }
    }

    return count($stack) == 0;
}

print_r(bracketsValidator("([])[]({"));
