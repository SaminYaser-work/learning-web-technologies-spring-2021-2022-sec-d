<?php

function printStars()
{
    $star = "*";
    for ($i = 0; $i < 3; $i++) {
        echo $star;
        $star .= "*";
        echo "\n";
    }
}

function printNumbers()
{
    $numbers = "123";
    for ($i = 3; $i > 0; $i--) {
        echo substr($numbers, 0, $i) . "\n";
    }
}

printStars();
echo "\n";
printNumbers();
echo "\n";
