<?php

$deg = [];

if(isset($_REQUEST['submit'])) {
    $deg = $_REQUEST['deg'];
}

function printDeg() {
    $all = "";

    foreach($GLOBALS['deg'] as $deg) {
        $all .= $deg . " ";
    }

    return $all;
}

echo "Degrees: " . printDeg();