<?php 
session_start();
require 'config.php';
$name = $_FILES['file']['name'];  
$temp_name = $_FILES['file']['tmp_name'];
$subject = $_POST['subject'];
$type = $_POST['type'];
$class = $_SESSION['class'];
if(isset($name))
{
    if(!empty($name))
    {      
        $location = 'class - '.$class."/".'studymaterial/'.$subject.'/'.$type.'/';
        if (!file_exists($location)) {
            mkdir($location, 0777, true);
        }      
        if(move_uploaded_file($temp_name, $location.$name))
        {
        	$_SESSION['message'] = "File uploaded successfully";
			header("location: profile.php");
        }       
    }
}
?>