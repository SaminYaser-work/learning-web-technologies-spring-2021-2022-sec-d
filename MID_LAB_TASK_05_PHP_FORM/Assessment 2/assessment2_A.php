<?php

$email = "";

if(isset($_REQUEST['submit'])) {
    $email = $_REQUEST['email'];
}

echo "Email: " . $email;