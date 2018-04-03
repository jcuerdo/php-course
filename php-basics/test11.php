<?php
$hidden = [
    0 => 'E',
    1 => 'P',
    2 => 'R',
    3 => 'T',
    4 => 'F',
    5 => 'C',
];

$a = 0;
$b = 3;
$c = 4;
$a++;

for ($i = 0; $i < 10; $i++) {
    if($i == $a){
        echo $hidden[$i];
    }
    if($i == $b){
        echo $hidden[$a-1];
    }
    if($i == $c) {
        echo $hidden[$a+1];
    }
}

$a--;

echo $hidden[$c];
echo $hidden[$a];

$c++;

echo $hidden[$c];
echo $hidden[$b];

/** What is the output of this code */

