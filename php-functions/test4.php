<?php
function one($array1, $array2, $number)
{
    if (in_array($number, $array1)) {
        return two($array1, $number);
    }

    return count($array1);
}

function two($array1, $number)
{
    foreach ($array1 as $key => $item) {
        if ($item == $number) {
            return $key;
        }
    }
}

$array1 = [1,5,3,4,2,6,7];
$array2 = [1,1];

echo one($array1, $array2,2);

echo one($array2, $array1,2);


/** What is the output of this code */
