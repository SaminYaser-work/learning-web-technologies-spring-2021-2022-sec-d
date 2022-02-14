<?php

$name = "";

if(isset($_REQUEST['submit'])) {
    $name = $_REQUEST['name'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment 2</title>
</head>
<body>
    <fieldset>
        <legend>Name</legend>
        <form method="POST" action="">
            <input type="text" name="name" id="name" value="">
            <hr>
            <input type="submit" name="submit" value="submit">
        </form>
    </fieldset>

    <h3><?=$name?></h3>
</body>
</html>