<?php
session_start();
require 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Course and Event Notification App</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<div id="form">
		<form action="signup.php" method="post">
			<div id="input">
				Name: <input type="text" name="name" placeholder="Your Name..." id="inputs">
			</div>
			<div id="input">
				Classcode: <input type="text" name="classcode" placeholder="Classcode" id="inputs">
			</div>
			<div id="input">
				Passcode: <input type="text" name="passcode" placeholder="Enter class passcode..." id="inputs">
			</div>
			<div id="input">
				Email: <input type="email" name="email" placeholder="Your email address" id="inputs">
			</div>
			<div id="input">
				Password: <input type="password" name="password" placeholder="Enter password here..." id="inputs">
			</div>
			<div id="input">
				Confirm password: <input type="password" name="confirmpassword" placeholder="Enter password again here..." id="inputs">
			</div>
			<div id="inputs">
				<input type="submit" value="SignUp" id="submit">
			</div>
	</div>
</form>
</body>
</html>