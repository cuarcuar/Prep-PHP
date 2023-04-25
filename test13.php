<?php

function checkClassrooms($list)
{
    $rooms = count($list);

    for ($i = 0; $i < count($list); $i++) {
        if ($list[$i][1] <= $list[$i + 1][0]) $rooms = $rooms - 1;
    }

    return $rooms;
}

print_r(checkClassrooms([[30, 75], [0, 50], [60, 150], [50, 60]]));
