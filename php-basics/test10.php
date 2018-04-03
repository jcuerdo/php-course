<?php


$numbers = [1,2,3,4,5,6,7,8,9,10];

$filtered = [];


foreach ($numbers as $number) {
    if($number > 3 && $number < 10) {
        $filtered[] = $number;
    }
}

foreach ($numbers as $number) {
    if (in_array($number, $filtered)) {
        echo 'A';
    } else{
        echo 'B';
    }
}

/** What is the output of this code */
