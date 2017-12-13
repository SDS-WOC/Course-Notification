<?php
session_start();
require 'config.php';
$email = $_POST['email'];
$q=$mysqli->query("SELECT * FROM users WHERE email = '$email'");
if($q->num_rows>0)
{
	$user = $q->fetch_assoc();
	if(password_verify($_POST['password'], $user['password']))
	{
		$_SESSION['email']=$email;
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