<?php

function removeDuplicates($array)
{
    print_r(array_unique($array));
}

removeDuplicates([1, 1, 1, 1, 1, 2, 2, 21, 3, 1, 1, 4, 2, 2, 2]);

/* remove all the duplicates in the given array */