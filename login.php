<?php
session_start();
require 'config.php';
$email = $_POST['email'];
$sql=$mysqli->query("SELECT * FROM users WHERE email = '$email'");
if($sql->num_rows>0)
{
	$user = $sql->fetch_assoc();
	if(password_verify($_POST['password'], $user['password']))
	{
		$_SESSION['email']=$email;
		$_SESSION['name']=$user['name'];
		$_SESSION['class']=$user['class'];
		header("location:profile.php");
	}
	else
	{
		$_SESSION['message']='Error: email and password does not match!';
		header("location:displaymessage.php");
	}
}
else
{
	$_SESSION['message']='user with this email does not exist!';
	header("location:displaymessage.php");
}
?>