<?php

$x = 6;
$y = 4;
$z = 2;

$myArray = [];

for ($i = 0; $i<10; $i++) {
    if ($i == $x || $i == $y || $i == $z) {
        $myArray[] = $i;
    }
}

echo $myArray[0];
echo $myArray[1];
echo $myArray[2];

/** What is the output of this code */
