<?php

$name = "";

if(isset($_REQUEST['submit'])) {
    $name = $_REQUEST['name'];
}

echo "Name: " . $name;