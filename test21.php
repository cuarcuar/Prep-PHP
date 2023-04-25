<?php

function strictlyRGB($list){
    rsort($list);
    return $list;
}

print_r(strictlyRGB(['G', 'B', 'R']));