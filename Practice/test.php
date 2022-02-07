<?php

// Printing to stdout
// ----------------------------------------------
print "Hello World! by print\n\n";
// $aVar = print("Hello World! by print assigned to a variable\n\n");
echo "Hello World! by echo" . " Joined\n";

// Variables
// ----------------------------------------------
$name = "Sam"; // Loosely typed
$cgpa = 4.0;

// Array
// ----------------------------------------------
$students = array("Sam", "John", "Jane");
$students2 = ["Sam", "John", "Jane"];
echo $students[2] . "\n";

// Two-dimensional array
$students3 = [
    ['Sam', '4.0'],
    ['John', '3.5'],
    ['Jane', '3.0']
];
echo $students3[2][1] . "\n";

// Associative array
$students4 = [
    "Sam" => "4.0",
    "John" => "3.5",
    "Jane" => "3.0"
];
echo $students4["Sam"] . "\n";

// Two-dimensional associative array
$students5 = [
    's1' => ["name" => "Sam", "cgpa" => "4.0"],
    's2' => ["name" => "John", "cgpa" => "3.5"],
    's3' => ["name" => "Jane", "cgpa" => "3.0"]
];
echo $students5["s2"]["cgpa"] . "\n";


// Functions
// ----------------------------------------------
function sum($num1, $num2)
{
    return $num1 + $num2;
}
echo sum(10, 2) . "\n";

// Conditional statements
// ----------------------------------------------

// Only checks the value
if (5 == '5') {
    echo "5 is equal to '5'\n";
} else {
    echo "5 is not equal to '5'\n";
}

// Checks both value and data type
if (5 === '5') {
    echo "5 is equal to '5'\n";
} else {
    echo "5 is not equal to '5'\n";
}

// Loops
// ----------------------------------------------

// For loop
for ($i = 0; $i < 5; $i++) {
    echo $i . "\n";
}

// Foreach loop
foreach ($students as $student) {
    echo $student . "\n";
}

// Taking input
// ----------------------------------------------
// $input = readline("Enter a number: ");
// echo "Your input: " . $input . "\n";

// HTML
// ----------------------------------------------
echo "<h1>This is a H1 tag</h1>\n";

// Testing
// ----------------------------------------------
for ($i = 0; $i < 10; $i++) {
    echo $i + 1  . ". <b>Samin<b><br>";
}
