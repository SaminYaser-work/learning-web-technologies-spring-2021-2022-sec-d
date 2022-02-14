<?php

$deg = [];
$ssc = "";
$hsc = "";
$bsc = "";
$msc = "";

if(isset($_REQUEST['submit'])) {
    if(!empty($_REQUEST['deg'])) {
        $deg = $_REQUEST['deg'];
        saveDeg();
    }
}

function saveDeg() {
    foreach($GLOBALS['deg'] as $deg) {
        switch($deg) {
            case "SSC":
                $GLOBALS['ssc'] = "checked";
                break;
            case "HSC":
                $GLOBALS['hsc'] = "checked";
                break;
            case "BSc":
                $GLOBALS['bsc'] = "checked";
                break;
            case "MSc":
                 $GLOBALS['msc'] = "checked";
                break;
            default:
                break;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment 5</title>
</head>
<body>

    <form action="" method="post">
        <fieldset>
            <legend><b>DEGREE</b></legend>
            <label for="degree">
            <input type="checkbox" name="deg[]" value="SSC" <?=$ssc?>>SSC
            <input type="checkbox" name="deg[]" value="HSC" <?=$hsc?>>HSC
            <input type="checkbox" name="deg[]" value="BSc" <?=$bsc?>>BSc
            <input type="checkbox" name="deg[]" value="MSc" <?=$msc?>>MSc
            <hr>
            <input type="submit" name="submit" value="submit">
            </label>
        </fieldset>
    </form>
</body>
</html>