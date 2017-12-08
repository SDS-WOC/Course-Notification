<?php
$_SESSION['classcode'] = $_POST['classcode'];
$_SESSION['passcode'] = $_POST['passcode'];
$classcode = $_POST['classcode'];
$passcode = $_POST['passcode'];
$q = $mysqli->query("SELECT * FROM courses WHERE course = '$classcode'");
if($q->num_rows>0)
{
  $_SESSION['message'] = 'class with this classcode already registered!';
  header("location: error.php");
}
else
{
    $sql = "INSERT INTO courses (course, passcode) " 
            . "VALUES ('$classcode', '$passcode')";
    if( $mysqli->query($sql) )
    {
        
    }
}

?>
