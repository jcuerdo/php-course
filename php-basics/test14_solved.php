<?php
$myArray1 = [1,2,3,4];
$myArray2 = [1,2,7,8];
$myArray3 = [1,4,7,9];


/**
 * Write a code to calculate which elemets are in $myArray1 but
 * not in $myArray2 and not in $myArray3
 *
*/

//VERSION 1

foreach ($myArray1 as $myArray1Item){
    //We suppose that is unique
    $myArray1ItemIsUnique = true;

    //And we search for a match in the other array
    foreach ($myArray2 as $myArray2Item){
        if($myArray1Item == $myArray2Item){
            $myArray1ItemIsUnique = false;
        }
    }

    //And only at the end of the foreach we can know if is unique or not
    if($myArray1ItemIsUnique){
        echo $myArray1Item;
    }
}

//VERSION 2 (With more than one array)

foreach ($myArray1 as $myArray1Item){
    //We suppose that is unique
    $myArray1ItemIsUniqueIn2 = true;

    //And we search for a match in the other array
    foreach ($myArray2 as $myArray2Item){
        if($myArray1Item == $myArray2Item){
            $myArray1ItemIsUniqueIn2 = false;
        }
    }

    //We suppose that is unique
    $myArray1ItemIsUniqueIn3 = true;

    //And we search for a match in the other array
    foreach ($myArray3 as $myArray3Item){
        if($myArray1Item == $myArray3Item){
            $myArray1ItemIsUniqueIn3 = false;
        }
    }

    //And only at the end of the foreach we can know if is unique or not
    if($myArray1ItemIsUniqueIn2 && $myArray1ItemIsUniqueIn3){
        echo $myArray1Item;
    }
}

//VERSION 3 Do not repeat yourself (We are going to use functions)


//We extract the next function
function elementIsUniqueInArray(array $myArray2, $myArray1Item)
{
//We suppose that is unique
    $myArray1ItemIsUnique = true;

    //And we search for a match in the other array
    foreach ($myArray2 as $myArray2Item) {
        if ($myArray1Item == $myArray2Item) {
            $myArray1ItemIsUnique = false;
        }
    }
    return $myArray1ItemIsUnique;
}

foreach ($myArray1 as $myArray1Item){
    $myArray1ItemIsUnique = elementIsUniqueInArray($myArray2, $myArray1Item);

    //And only at the end of the foreach we can know if is unique or not
    if($myArray1ItemIsUnique){
        echo $myArray1Item;
    }
}

//VERSION 4 Simplification

foreach ($myArray1 as $myArray1Item){
    if(elementIsUniqueInArray($myArray2, $myArray1Item)){
        echo $myArray1Item;
    }
}

//VERSION 5 Simplification for 2 arrays

foreach ($myArray1 as $myArray1Item){
    if(elementIsUniqueInArray($myArray2, $myArray1Item) && elementIsUniqueInArray($myArray3, $myArray1Item)){
        echo $myArray1Item;
    }
}

//VERSION 6 Create another function for multiple arrays

function uniqueElements($myArray1, $myArray2, $myArray3){
    foreach ($myArray1 as $myArray1Item){
        if(elementIsUniqueInArray($myArray2, $myArray1Item) && elementIsUniqueInArray($myArray3, $myArray1Item)){
            echo $myArray1Item;
        }
    }
}

uniqueElements($myArray1, $myArray2, $myArray3);

//VERSION 7 : How to do it with no limit of arrays to compare to?
//
//Let's do it with this information http://php.net/manual/es/functions.arguments.php#functions.variable-arg-list