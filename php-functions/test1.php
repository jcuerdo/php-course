<?php


function one($a, $b, $c)
{
    if ($a > $b) {
        return $a + $b + $c;
    } else {
        return two($c);
    }
}

function two($number)
{
    if ($number <=5) {
        return $number * $number;
    }

    return $number + 5;
}

echo one(1,2,5);

echo one(10, 5, 1);

/** What is the output of this code */
