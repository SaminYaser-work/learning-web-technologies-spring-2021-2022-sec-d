<?php

session_start();

$username = $_POST['name'];
$password = $_POST['password'];
$status = false;

if(isset($_REQUEST['submit'])) {
    
    if($username != null && $password != null){
        if($username == 'admin' && $password == 'admin'){
            $_SESSION['status'] = true;
            header('location: homePage.php');
        }else{
            echo 'Invalid User';
        }
    }
    else {
        echo 'Please enter username and password';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="name"> Name: 
            <input type="text" name="name" id="">
        </label>
        <br>
        <label for="password"> Passoword: 
            <input type="password" name="password" id="">
        </label>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
    
</body>
</html>