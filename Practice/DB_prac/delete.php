<?php
$con = mysqli_connect('localhost', 'root', '', 'testdb');
$sql = "DELETE FROM users WHERE ID=" . $_REQUEST['id'];

if(mysqli_query($con, $sql)) {
    header('location: user-table.php');
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}