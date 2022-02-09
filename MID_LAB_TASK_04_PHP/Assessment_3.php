<?php

function evenOrOdd($number)
{
    if ($number % 2 == 0) {
        return "Even";
    } else {
        return "Odd";
    }
}

$number = readline("Enter a number: ");
echo "The number is " . evenOrOdd($number) . "\n";
