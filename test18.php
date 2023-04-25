<?php

function encode($string)
{

    $charAux = '';
    $count = 0;
    $encodedText = '';

    for ($i = 0; $i < strlen($string); $i++) {
        if ($charAux == $string[$i]) {
            $count += 1;
        } else {
            if ($count > 0) $encodedText = $encodedText . $count . $charAux;
            $charAux = $string[$i];
            $count = 0;
            $count += 1;
        }
    }

    $encodedText = $encodedText . $count . $charAux;

    return $encodedText . "\n";
}

function decode($string)
{
    $decodedText = '';

    for ($i = 0; $i < strlen($string); $i++) {

        if (is_numeric($string[$i])) {
            $code = str_repeat($string[$i + 1], $string[$i]);
            $decodedText = $decodedText . $code;
        }
    }

    return $decodedText . "\n";
}


print_r(encode("AAAABBBCCDAA"));
print_r(decode(encode("AAAABBBCCDAA")));
