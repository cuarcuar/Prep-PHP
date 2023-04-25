<?php

function longestSubstring($k, $string)
{

    $substring = '';
    $auxChar = '';
    $auxK = 0;
    $string = str_split($string);

    for ($i = 0; $i < count($string); $i++) {

        $auxChar = $string[$i];

        for ($j = 0; $j < count($string); $j++) {
            if ($auxChar == $string[$j] || ($auxK > 0 && $auxK < $k)) {

                if($auxChar == $string[$j]) $auxK += 1;
                $substring = $substring . '' . $string[$j];

            }
        }

        if ($auxK == $k && count(str_split($substring)) != count($string)) return $substring . "\n";

        $auxK = 0;
        $substring = '';
    }
}

print_r(longestSubstring(3, "abcbcba"));
