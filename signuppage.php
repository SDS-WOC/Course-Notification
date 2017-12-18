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
				<label for="name"></label>
				<input type="text" id="name" name="name" placeholder="Your Name..." class="inputs">
			</div>
			<div class="input">
				<label for="classcode">Classcode:</label>
				<input type="text" id="classcode" name="classcode" placeholder="Classcode" class="inputs">
			</div>
			<div class="input">
				<label for="passcode">Passcode:</label>
				<input type="text" id="passcode" name="passcode" placeholder="Enter class passcode..." class="inputs">
			</div>
			<div class="input">
				<label for="email">Email:</label>
				<input type="email" id="email" name="email" placeholder="Your email address" class="inputs">
			</div>
			<div class="input">
				<label for="password">Password:</label>
				<input type="password" id="password" name="password" placeholder="Enter password here..." class="inputs">
			</div>
			<div class="input">
				<label id="confirmpassword">Confirm password:</label>
				<input type="password" id="confirmpassword" name="confirmpassword" placeholder="Enter password again here..." class="inputs">
			</div>
			<div class="inputs">
				<input type="submit" value="SignUp" class="submit">
			</div>
	</div>
</form>
</body>
</html>