<?php

$x = 10;
$myArray = ['1' => 2, '5' => 3];

$myArray['1'] = $myArray['1'] * 2;
$myArray['5'] = $myArray['1'] + $x;
$myArray['PEPE'] = $myArray['1'] + $myArray['2'];


echo $myArray['1'];
echo $myArray['5'];
echo $myArray['PEPE'];

/** What is the output of this code */
