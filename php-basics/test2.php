<?php

$a = 3;
$b = 5;
$c = 2;

$a++;
$b--;

if ($a == $b) {
    echo 'A';
} else {
    echo 'B';
}

$b = ($c * $b) / 2;
$a = $a + 1;
$c = $a + $b + $c;

echo $b;
echo $a;
echo $c;

/** What is the output of this code */
