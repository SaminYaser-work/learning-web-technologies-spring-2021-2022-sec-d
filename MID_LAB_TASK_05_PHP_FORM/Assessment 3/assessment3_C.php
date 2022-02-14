<?php

$dd = "";
$mm = "";
$yyyy = "";

if(isset($_REQUEST['submit'])) {
    $dd = $_REQUEST['dd'];
    $mm = $_REQUEST['mm'];
    $yyyy = $_REQUEST['yyyy'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment 3</title>
</head>
<body>

    <fieldset>
        <legend><b>DATE OF BIRTH</b></legend>
        <form action="" method="POST">
            <label for="dob">
                <table>
                    <tr align="center">
                        <td>dd</td>
                        <td></td>
                        <td>mm</td>
                        <td></td>
                        <td>yyyy</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="number" name="dd" id="" value="<?=$dd?>" style="width: 35px;" min="1" max="31">
                        </td>
                        <td>/</td>
                        <td>
                            <input type="number" name="mm" id="" value="<?=$mm?>" style="width: 35px;" min="1" max="12">
                        </td>
                        <td>/</td>
                        <td>
                            <input type="number" name="yyyy" id="" value="<?=$yyyy?>" style="width: 50px;" min="1900" max="2050">
                        </td>
                    </tr>
                </table>
            <hr>
            <input type="submit" name="submit" value="submit">
            </label>
        </form>
    </fieldset>
    <br>
</body>
</html>