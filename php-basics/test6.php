<?php
$x = 2;
$y = 6;

$z = $x * $i;

$w = 0;

for ($i = 0; $i < 10; $i++) {
    $x++;
    $y--;

    if ($x == $y) {
        $z--;
    } else {
        $w++;
    }
}

if ($z == $w) {
    echo 'A';
} else {
    echo $z - $w;
}

echo $x;
echo $y;

/** What is the output of this code */
