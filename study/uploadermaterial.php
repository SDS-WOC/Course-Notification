<?php 
session_start();
require '../config.php';
$name = $_FILES['file']['name'];  
$temp_name = $_FILES['file']['tmp_name'];
$subject = $_POST['subject'];
$type = $_POST['type'];
$description = $_POST['desc'];
$class = $_SESSION['class'];
$user = $_SESSION['name'];
$dated = $_POST['date'];
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
			$sql = $mysqli->query("INSERT INTO studymaterial (title, dated, description, uploader, class, subject, type) VALUES ('$name', '$dated', '$description', '$user', '$class', '$subject', '$type' )");
            header("location: profile.php");
        }
        else 
        {
            $_SESSION['message']="file with this name already exists";
            header("location: profile.php");    
        }    
    }
}
?>