<?php

$deg = [];

if(isset($_REQUEST['submit'])) {
    if(!empty($_REQUEST['deg'])) {
        $deg = $_REQUEST['deg'];
    }
}

function printDeg() {
    $all = "";

    foreach($GLOBALS['deg'] as $deg) {
        $all .= $deg . " ";
    }

    return $all;
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
            <input type="checkbox" name="deg[]" value="SSC">SSC
            <input type="checkbox" name="deg[]" value="HSC">HSC
            <input type="checkbox" name="deg[]" value="BSc">BSc
            <input type="checkbox" name="deg[]" value="MSc">MSc
            <hr>
            <input type="submit" name="submit" value="submit">
            </label>
        </fieldset>
    </form>

    <h3><?=printDeg()?></h3>

</body>
</html>