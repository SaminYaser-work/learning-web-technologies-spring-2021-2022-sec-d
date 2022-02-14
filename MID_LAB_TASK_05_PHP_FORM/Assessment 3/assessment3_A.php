<?php

$dd = "";
$mm = "";
$yyyy = "";

if(isset($_REQUEST['submit'])) {
    $dd = $_REQUEST['dd'];
    $mm = $_REQUEST['mm'];
    $yyyy = $_REQUEST['yyyy'];
}

echo "Date: " . $dd . "/" . $mm . "/" . $yyyy;