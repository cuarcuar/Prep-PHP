<?php

function returnUnique($list)
{

    $countedList = array_count_values($list);

    return array_search(1, $countedList);
}


print_r(returnUnique([1, 3, 3, 4, 21, 2, 4, 1, 2, 5, 3, 5, 57, 5, 57, 2]));
