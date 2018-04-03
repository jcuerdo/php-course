<?php
function one($array1, $array2)
{
    if (count($array1) >= count($array2)) {
        $last = two($array1, count($array2));
    } else {
        $last = two($array2, 10);
    }

    if ($last == null) {
        echo 'Index not found';
    }

    echo $last;
}

function two($oneArray, $index)
{
    if (isset($oneArray[$index])) {
        return $oneArray[$index];
    }

    return null;
}

echo one([1,2,3,4], [1,1]);

echo one([1,2,3,4], [1,2,3,4,5,6,7]);

echo one([1,2,3,4], [1,2,3,4,5,6,7,8,9,10,11]);

/** What is the output of this code */
