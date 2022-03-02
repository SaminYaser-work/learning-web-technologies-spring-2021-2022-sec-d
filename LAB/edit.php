<?php 
	// require_once('header.php');

    $file = fopen('user.txt', 'r');

    while(!feof($file)) {
        $line = fgets($file);
        $userArray = explode('|', $line);
        if ($userArray[0] == $_REQUEST['id']) {
            break;
        }
    }


?>

<html>

<head>
    <title>Edit User</title>
</head>

<body>


    <fieldset>
        <legend>Edit User</legend>

        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?=$userArray[0]?>">
            <table>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" value="<?=$userArray[1]?>"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="text" name="password" value="<?=$userArray[2]?>"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" value="<?=$userArray[3]?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Update"></td>
                </tr>
            </table>
    </fieldset>



</body>

</html>