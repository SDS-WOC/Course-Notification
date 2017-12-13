<?php
require 'config.php';
SESSION_START();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Companion</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<div id="form">
      <form action="login.php" method="post">
      <div id="input"> 
        Username: <input type="email" name="email" placeholder="Username" id="inputs">
      </div>
      <div id="input">
        Password: <input type="password" name="password" placeholder="password" id="inputs">
      </div>
      <div id="input">
        <input type="submit" value="login" id="submit">
      </div>
      <div id="input">
      	Not a member yet? <a href="signuppage.php">Sign Up</a> here...
      </div>
      <div id="input">
      	Create <a href="createclass.php">new class</a> here...
      </div>
    </div>
  </body>
</html>