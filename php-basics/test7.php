<?php

$x = 6;
$y = 4;
$z = 2;

$counter1 = 0;
$counter2 = 0;
$counter3 = 0;

$myArray = [6,6,3,2,5,6,7,2,2,2,2,2];

foreach ($myArray as $item) {
    if ($item == $x) {
        $counter1++;
    } else {
        $counter2++;
    }

    $counter3++;
}

echo $counter1;
echo $counter2;
echo $counter3;

/** What is the output of this code */
