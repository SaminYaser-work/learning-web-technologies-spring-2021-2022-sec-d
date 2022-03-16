<?php 
$con = mysqli_connect('localhost', 'root', '', 'testdb');
?>

<html>

<head>
    <title>Create New</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php 
            $sql = "SELECT * FROM users";
            $result = mysqli_query($con, $sql);
            while($row = mysqli_fetch_assoc($result)){
        ?>

        <tr>
            <td><?=$row['ID']?></td>
            <td><?=$row['USERNAME']?></td>
            <td><?=$row['PASSWORD']?></td>
            <td><?=$row['EMAIL']?></td>
            <td>
                <a href="edit.php?id=<?=$row['ID']?>"> EDIT </a> |
                <a href="delete.php?id=<?=$row['ID']?>"> DELETE </a>
            </td>
        </tr>

        <?php
        }
		?>



    </table>
</body>

</html>