<?php

$gender = "";

if(isset($_REQUEST['submit'])) {
    $gender = $_REQUEST['gender'];
}

echo "Gender: " . $gender;