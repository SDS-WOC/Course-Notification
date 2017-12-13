<?php
session_start();
require 'config.php';
$title = $_POST['title'];
$classcode = $_POST['classcode'];
$passcode = $_POST['passcode'];
$q = $mysqli->query("SELECT * FROM class WHERE code = '$classcode'");
if($q->num_rows>0)
{
  $_SESSION['message'] = 'class with this classcode already registered!';
  header("location: displaymessage.php");
}
else
{
    $sql = "INSERT INTO class (title, code, passcode) " 
            . "VALUES ('$title','$classcode', '$passcode')";
    if( $mysqli->query($sql) )
    {
    	$_SESSION['message'] = 'class created successfully';
        header("location: displaymessage.php");
    }
}

?>
