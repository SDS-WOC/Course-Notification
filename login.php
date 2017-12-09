<?php
$email = $_POST['email'];
$sql=$mysqli->query("SELECT * FROM users WHERE email = '$email'");
if($sql->num_rows()>0)
{
	$user = $sql->fetch_assoc();
	if(password_verify($_POST['password'], $user['password']))
	{
		
	}
}
?>