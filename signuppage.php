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
	<div class="form">
		<form action="signup.php" method="post">
			<div class="input">
				Name: <input type="text" name="name" placeholder="Your Name..." class="inputs">
			</div>
			<div class="input">
				Classcode: <input type="text" name="classcode" placeholder="Classcode" class="inputs">
			</div>
			<div class="input">
				Passcode: <input type="text" name="passcode" placeholder="Enter class passcode..." class="inputs">
			</div>
			<div class="input">
				Email: <input type="email" name="email" placeholder="Your email address" class="inputs">
			</div>
			<div class="input">
				Password: <input type="password" name="password" placeholder="Enter password here..." class="inputs">
			</div>
			<div class="input">
				Confirm password: <input type="password" name="confirmpassword" placeholder="Enter password again here..." class="inputs">
			</div>
			<div class="inputs">
				<input type="submit" value="SignUp" class="submit">
			</div>
	</div>
</form>
</body>
</html>