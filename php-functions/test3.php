<?php
function one($array1, $array2)
{
    if (count($array1) >= count($array2)) {
        return two($array1, $array2);
    } else {
        return two($array2, $array1);
    }
}

function two($array1, $array2)
{
    foreach ($array2 as $key => $value) {
        $array1[$key] = $value;
    }

    return $array1;
}

$a1 = [7,8,9];
$a2 = [1,2,3,5,6];

$result = one($a1, $a2);

echo $result[0];
echo $result[4];

/** What is the output of this code */
