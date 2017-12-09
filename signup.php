<?php
require 'config.php';
$name = $_POST['name'];
$email = $_POST['email'];
$class = $_POST['classcode'];
$passcode = $_POST['passcode'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$hash = md5(rand(0, 1000));
$result = $mysqli->query("SELECT * FROM users WHERE email='$email' ") or die($mysqli->error());
$res = $mysqli->query("SELECT * FROM class WHERE code='$class' ") or die($mysqli->error());
if($result->num_rows >0)
{
	$_SESSION['message'] = 'User already exits!';
	header('location: displaymessage.php');
}
else if($res->num_rows==0)
{
	$_SESSION['message'] = 'No such class exists!';
	header('location: displaymessage.php');
}
else
{
	$sql = "INSERT INTO users (name, email, password, class, hash)"."VALUES ('$name', '$email', '$class', '$hash')" ;
	if( $mysqli->query($sql))
	{
		$_SESSION['message'] = 'Account created successfully, Head to login page to login';
		header('location: displaymessage.php');
	}
}
?>