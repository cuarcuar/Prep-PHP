<?php

function numberMultiplyTable($i, $number)
{
  echo ("$i * $number = " . $i * $number . "\n");
  $i >= 10 ? exit() :  numberMultiplyTable($i + 1, $number);
}

numberMultiplyTable(1, 5);

/* Show the full multiply table of a number */