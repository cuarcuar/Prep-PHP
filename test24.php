<?php

function itineraries($list, $start, $result)
{
    array_push($result, $start);

    if (count($list) == 0) {
        print_r($result);
    }

    for ($i = 0; $i < count($list); $i++) {

        if ($start == $list[$i][0]) {
            $start = $list[$i][1];
            unset($list[$i]);
            $list = array_values($list);
            itineraries($list, $start, $result);
        }
    }
}

itineraries([['SFO', 'HKO'], ['YYZ', 'SFO'], ['YUL', 'YYZ'], ['HKO', 'ORD']], 'YUL', []);
