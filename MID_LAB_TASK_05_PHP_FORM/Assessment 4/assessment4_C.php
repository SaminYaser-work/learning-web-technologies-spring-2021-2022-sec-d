<?php

$gender = "";
$isMale = "";
$isFemale = "";
$isOther = "";

if(isset($_REQUEST['submit'])) {
    if(!empty($_REQUEST['gender'])) {
        $gender = $_REQUEST['gender'];
    }

    switch($gender) {
        case "Male":
            $isMale = "checked";
            break;
        case "Female":
            $isFemale = "checked";
            break;
        case "Other":
            $isOther = "checked";
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
    <title>Assessment 4</title>
</head>
<body>

    <form action="" method="post">
        <fieldset>
            <legend><b>GENDER</b></legend>
            <label for="gender">
            <input type="radio" name="gender" value="Male" <?=$isMale?>>Male
            <input type="radio" name="gender" value="Female" <?=$isFemale?>>Female
            <input type="radio" name="gender" value="Other" <?=$isOther?>>Other <br>
            <hr>
            <input type="submit" name="submit" value="submit">
            </label>
        </fieldset>
    </form>
</body>
</html>