<?php
$a = 4;
$b = 6;
$c = 10;
$x = 0;

for ($i = 0; $i < $c; $i++) {
    if ($i == $a && $i == ($c - $b)) {
        echo $i;
    } else {
        $x++;
    }

    if ($i > $b || $i < 0) {
        echo $i;
    } else {
        if ($i == '2') {
            echo 'A';
        }
    }
}

if ($x == ($c - 1)) {
    echo 'B';
}

/** What is the output of this code */
