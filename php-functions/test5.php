<?php
function one($name1, $name2)
{
    if (strlen($name1) >= strlen($name2)) {
        return $name1;
    }

    return $name2;
}

function two($name, $character)
{
    return strpos($name, $character);
}

function filterName($name)
{
    $where = two($name, 't');

    $newName = substr($name, $where, 4);

    $newName[0] = strtoupper($newName[0]);

    $newName = str_replace('i', 'y', $newName);

    return $newName;
}

function hi($name)
{
    return 'Hi, ' . $name . ', how are you?';
}


$pepe = 'Pepe';
$antonio = "Antonio";

$selected = one($pepe, $antonio);

$newName = filterName($selected);

$result = hi($newName);

echo $result;

/** What is the output of this code */
