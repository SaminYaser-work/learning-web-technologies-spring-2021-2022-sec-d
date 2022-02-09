<?php

$array2d = [
    [1,  2,   3,  "A"],
    [1,  2,  "B", "C"],
    [1, "D", "E", "F"]
];

$k = 3;
for ($i = 0; $i < 3; $i++) {
    $j = 0;
    while ($j < $k) {
        echo $array2d[$i][$j];
        $j++;
    }
    $k--;
    echo "\n";
}

echo "\n";

$j = 3;
for ($i = 0; $i < 3; $i++) {
    $k = $j;
    while($k <= 3) {
        echo $array2d[$i][$k];
        $k++;
    }
    $j--;
    echo "\n";
}