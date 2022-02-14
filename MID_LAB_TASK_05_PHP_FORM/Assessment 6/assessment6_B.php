<?php

$bg = "";

if(isset($_REQUEST['submit'])) {
    $bg = $_REQUEST['bg'];
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
                    <option value="A">A</option>
                    <option value="B">B</option>
                </select>
            <hr>
            <input type="submit" name="submit" value="submit">
            </label>
        </fieldset>
    </form>

    <h3><?=$bg?></h3>

</body>
</html>