<?php
$all = [1,2,3,4,5,10,1,3,4,7,2,9,5,6,7,5];
$lessThan = [];
$greaterThan = [];
$reference = 5;
$numOfReferenceAppear = 0;

foreach ($all as $putosnumeros) {
    if ($putosnumeros<$reference){$lessThan[]=$putosnumeros;}
    else {$greaterThan[]=$putosnumeros;}}

foreach ($all as $putosnumeros) {
    if ($putosnumeros==$reference) {$numOfReferenceAppear++;} }

var_dump($lessThan);
var_dump($greaterThan);

var_dump($numOfReferenceAppear);
/**
 * Write a code that gets all numbers from $all and put the numbers minors than $reference
 * in $lessThan and the numbers greaters in $greaterThan.
 *
 * And put in $numOfReferenceAppear the number of times that $reference appears in $all
 *
*/




