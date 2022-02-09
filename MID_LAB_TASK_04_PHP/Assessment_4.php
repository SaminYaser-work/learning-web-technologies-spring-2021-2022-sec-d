<?php

function largestNumber($n1, $n2, $n3)
{
    return $n1 > $n2 ? ($n1 > $n3 ? $n1 : $n3) : ($n2 > $n3 ? $n2 : $n3);
}

$n1 = readline("Enter the first number: ");
$n2 = readline("Enter the second number: ");
$n3 = readline("Enter the third number: ");

echo "The largest number is " . largestNumber($n1, $n2, $n3) . "\n";
