<?php
session_start();
require 'config.php';
$title = $_POST['title'];
$code = $_POST['code'];
$class = $_SESSION['class'];
$q = $mysqli->query("SELECT * FROM subjects WHERE code = '$code' and class = '$class'");
if($q->num_rows>0)
{
  $_SESSION['message'] = 'subject with this code already exists within given class!';
  header("location: displaymessage.php");
}
else
{
    $sql = "INSERT INTO subjects (code, title, class) VALUES ('$code','$title', '$class')";
    if( $mysqli->query($sql) )
    {
    	$_SESSION['message'] = 'subject created successfully';
        header("location: profile.php");
    }
}
?>
