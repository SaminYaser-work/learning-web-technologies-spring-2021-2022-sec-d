<?php 
    $con = mysqli_connect('localhost', 'root', '', 'testdb');
    $sql = "SELECT * FROM users where ID=" . $_REQUEST['id'];
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
?>

<html>

<head>
    <title>Edit User</title>
</head>

<body>


    <fieldset>
        <legend>Edit User</legend>

        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?=$row['ID']?>">
            <table>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" value="<?=$row['USERNAME']?>"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="text" name="password" value="<?=$row['PASSWORD']?>"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" value="<?=$row['EMAIL']?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Update"></td>
                </tr>
            </table>
    </fieldset>



</body>

</html>