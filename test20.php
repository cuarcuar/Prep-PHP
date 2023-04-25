<?php

function medianRunnning($list)
{

    $aux_list = [];
    $median_list = [];

    for ($i = 0; $i < count($list); $i++) {
        array_push($aux_list, $list[$i]);
        sort($aux_list);

        if (count($aux_list) % 2 == 0) {
            $mid = count($aux_list) / 2;
            $median = ($aux_list[$mid] + $aux_list[$mid - 1]) / 2;
            array_push($median_list, $median);
        } else {
            $mid = count($aux_list) / 2;
            $median = $aux_list[floor($mid)];
            array_push($median_list, $median);
        }
    }

    return $median_list;
}

print_r(medianRunnning([2, 1, 5, 7, 2, 0, 5]));
