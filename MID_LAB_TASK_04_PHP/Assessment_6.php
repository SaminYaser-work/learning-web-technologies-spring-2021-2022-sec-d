<?php

function search($array, $value)
{
    $index = 0;
    while ($index < count($array)) {
        if ($array[$index] == $value) {
            return $index;
        } else {
            $index++;
        }
    }
    return -1;
}

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$result = search($array, 5);
if ($result == -1) {
    echo "Value not found\n";
} else {
    echo "Value found at index: " . $result . "\n";
}
