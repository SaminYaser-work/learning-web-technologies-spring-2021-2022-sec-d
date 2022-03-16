<?php
$con = mysqli_connect('localhost', 'root', '', 'testdb');

if(isset($_REQUEST['submit'])) {
    $sql = "UPDATE users SET USERNAME='" . $_REQUEST['username'] . 
           "', PASSWORD='" . $_REQUEST['password'] . "', EMAIL='" . 
           $_REQUEST['email'] . "' WHERE ID=" . $_REQUEST['id'];
    

    if (mysqli_query($con, $sql)) {
        header('location: user-table.php');
    }
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }


}