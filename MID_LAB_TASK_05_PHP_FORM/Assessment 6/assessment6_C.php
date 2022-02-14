<?php

$bg = "";
$a ="";
$b ="";

if(isset($_REQUEST['submit'])) {
    $bg = $_REQUEST['bg'];

    switch($bg) {
        case "A":
            $a = "selected";
            break;
        case "B":
            $b = "selected";
            break;
        default:
            break;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment 6</title>
</head>
<body>

    <form action="" method="post">
        <fieldset>
            <legend><b>BLOOD GROUP</b></legend>
            <label for="bg">
                <select name="bg">
                    <option value="A" <?=$a?>>A</option>
                    <option value="B" <?=$b?>>B</option>
                </select>
            <hr>
            <input type="submit" name="submit" value="submit">
            </label>
        </fieldset>
    </form>
</body>
</html>