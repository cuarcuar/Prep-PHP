<?php

function subsetsFinder($set)
{

    $result_set = [[]];

    foreach ($set as $element) {
        foreach ($result_set as $subset) {
            $new_subset = array_merge($subset, [$element]);
            $result_set[] = $new_subset;
        }
    }

    sort($result_set);

    return $result_set;
}

print_r(subsetsFinder([1, 2, 3, 4]));
