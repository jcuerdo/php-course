<?php
$a = 1;
$b = 2;
$c = 5;

$a++;
$a++;

$a = $a + $b;

if ($c == $b) {
    $c = 0;
}
$c++;

if ($c == 5) {
    $a = $b + 9;
} else {
    $a = 100;
}
$c++;

if ($c == $b) {
    $a = $a /10;
    echo $a + $b + $c;
} else {
    $c = 1;
    echo $a + (2*$b) + $c + 20;
}

/** What is the output of this code */