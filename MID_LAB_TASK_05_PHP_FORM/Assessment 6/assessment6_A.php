<?php

$bg = "";

if(isset($_REQUEST['submit'])) {
    $bg = $_REQUEST['bg'];
}

echo "Blood Group: " . $bg;