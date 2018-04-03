<?php
$a = 1;
$b = 2;
$c = 5;

for ($i = 0; $i < $c; $i++) {
    if ($i == $a || $i == $b) {
        echo $i;
    }
}

for ($i = 3; $i < $c; $i++) {
    if ($i == $a || $i == $b) {
        echo $i;
    }
}

for ($i = 0; $i < $c; $i++) {
    if ($i == $a && $i == $b) {
        echo $i;
    }
}

$a++;

for ($i = 0; $i < $c; $i++) {
    if ($i == $a && $i == $b) {
        echo $i;
    }
}

/** What is the output of this code */
