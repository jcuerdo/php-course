<?php

$a = 22;
$b = 55;
$c = 2;
$d = false;
$name = 'pepe';
$character1 = 'e';
$character2 = 'p';
$character3 = 'l';

if ($a > $b && $c > ($a - $b)) {
    echo 'A';
}

if ($a < $b || true != $d) {
    echo 'B';
}

if ($a > 10 && $b > 10) {
    echo 'C';
}

if ($a < 10 || $b <= 10 || $c < 2) {
    echo 'D';
}

if ($a == 10 || $b == 22 || $c == 4) {
    echo 'E';
}

if (($a > 10 || $b == 22) && $c == 4) {
    echo 'F';
}

if (($a > 1 && $b == 1) || ($c == 4 || $d = false)) {
    echo 'G';
}

if ($name == $character2 . 'e' . 'p' . $character1) {
    echo '';
}

if ('elpep' . $character1 == $character3 . $name) {
    echo '';
}

if (($a == $b) == $d) {
    echo 'What a mess';
}

/** What is the output of this code */
