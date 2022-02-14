<?php

$email = "";

if(isset($_REQUEST['submit'])) {
    $email = $_REQUEST['email'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment 1</title>
</head>
<body>
    <fieldset>
        <legend>EMAIL</legend>
        <form method="POST" action="">
            <input type="email" name="email" id="email" value=""> <b>i</b>
            <hr>
            <input type="submit" name="submit" value="submit">
        </form>
    </fieldset>

    <h3><?=$email?></h3>
</body>
</html>