<?php 
	// require_once('header.php');
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

				$file = fopen('user.txt', 'r');

				while(!feof($file)){
					$user = fgets($file);
                    if($user == ''){
                        break;
                    }
					$userArray = explode('|', $user);
			?>

        <tr>
            <td><?=$userArray[0]?></td>
            <td><?=$userArray[1]?></td>
            <td><?=$userArray[2]?></td>
            <td><?=$userArray[3]?></td>
            <td>
                <a href="edit.php?id=<?=$userArray[0]?>"> EDIT </a> |
                <a href="delete.php?id=<?=$userArray[0]?>"> DELETE </a>
            </td>
        </tr>

        <?php
				}
		?>



    </table>
</body>

</html>