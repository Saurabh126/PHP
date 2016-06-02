<?php require_once("db_connection.php");?>
<?php require_once("functions.php");?>
<?php 
    global $subject_set1;
    global $connection;
    $query = "INSERT ";
    $query .= "INTO info (information) ";
    $query .= "VALUES ";
    $query .= "(\"{$_POST["input"]}\") ;";
    $subject_set = mysqli_query($connection , $query);
    confirm_query($subject_set);
 ?>
 <a href="loggedin.php">Click here if you want to enter some more data .</a>
 <br/><br/><br/><br/>
 <a href="form.php">Click here if you want to logout .</a>
