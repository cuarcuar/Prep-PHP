<?php

function justifyText($list, $k)
{

    $textArray = [];
    $completeText = '';


    for ($i = 0; $i < count($list); $i++) {
        if (strlen($completeText) <= $k) {
            $completeText = $completeText . " " . $list[$i];
        } else {
            array_push($textArray, $completeText);
            $completeText = '';
        }
    }

    if ($completeText != '') array_push($textArray, $completeText);

    return $textArray;
}


print_r(justifyText(["the", "quick", "brown", "fox", "jumps", "over", "the", "lazy", "dog"], 16));
