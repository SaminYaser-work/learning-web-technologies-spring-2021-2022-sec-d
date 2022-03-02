<?php
$file = fopen('user.txt', 'r');
$updatedContent = "";
while(!feof($file)) {
    $line = fgets($file);
    $user = explode('|', $line);
    if($user[0] != $_REQUEST['id']) {
        $updatedContent .= $line;
    }
}
fclose($file);

$file = fopen('user.txt', 'w');
fwrite($file, $updatedContent);
fclose($file);
header('location: user-table.php');