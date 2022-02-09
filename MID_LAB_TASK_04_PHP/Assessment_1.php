<?php
function areaOfRectangle($length, $width)
{
    if ($length < 0 || $width < 0) {
        return -1;
    }

    return $length * $width;
}

function perimeterOfRectangle($length, $width)
{
    if ($length < 0 || $width < 0) {
        return -1;
    }

    return 2 * ($length + $width);
}

$length = readline("Enter the length: ");
$width = readline("Enter the width: ");

$area = areaOfRectangle($length, $width);
$perimeter = perimeterOfRectangle($length, $width);

if ($area == -1) {
    echo "Length and width must be greater than zero";
} else {
    echo "The area is: " . $area;
    echo "The perimeter is: " . $perimeter;
}
