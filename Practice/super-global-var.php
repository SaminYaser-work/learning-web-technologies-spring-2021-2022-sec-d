<?php

// super global variable -> associative array
//print_r($_GET);
//print_r($_GET['id']);

// if($_GET['id'] == 1) {
//     echo "You selected id 1";
// } elseif($_GET['id'] == 2) {
//     echo "You selected id 2";
// } elseif($_GET['id'] == 3) {
//     echo "You selected id 3";
// } else {
//     echo "You did not select an id";
// }

// echo $_GET['firstname'];
// echo $_GET['lastname'];

// echo $_POST['firstname'];
// echo $_POST['lastname'];

$fname = "";
$lname = "";
$err = "";

// Have to submit the form
if(isset($_REQUEST['submit'])) {
    // Works for both GET and POST
    // echo $_REQUEST['firstname'] . " " . $_REQUEST['lastname'];
    $fname = $_REQUEST['firstname'];
    $lname = $_REQUEST['lastname'];
}
else {
    $fname = "invalid";
    $lname = "invalid";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form in HTML</title>
</head>
<body>
    <h2>Form</h2>

    <!-- POST is more secure -->
    <form method="POST" action="super-global-var.php">

        <b> <?php $err ?> </b>

        <label for="firstname">First Name: </label><br>
        <input type="text" name="firstname" id="firstname" value="<?php$fname?>"><br>
        <span style="color: red;"><?php echo $fname; ?></span><br>
        <label for="lastname">Last Name: </label><br>
        <input type="text" name="lastname" id="lastname"><br>
        <span style="color: red;"><?php echo $lname; ?></span><br>
        <input type="submit" name="submit" value="submit">

    </form>
</body>
</html>