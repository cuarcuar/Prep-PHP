<?php

function returnIntersection($listA, $listB) {
    return array_shift(array_intersect($listA, $listB));
}

print_r(returnIntersection([3,7,8,10], [99,1,8,10]));