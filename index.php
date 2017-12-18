<php
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
	<div class="form">
    <form action="login.php" method="post">
      <div class="input"> 
        <label>Username: <input type="email" name="email" placeholder="Username" class="inputs">
        </label>
      </div>
      <div class="input">
        <label>Password: <input type="password" name="password" placeholder="password" class="inputs">
        </label>
      </div>
      <div class="input">
        <input type="submit" value="login" class="submit">
      </div>
      <div class="input">
      	Not a member yet? <a href="signuppage.php">Sign Up</a> here...
      </div>
      <div class="input">
      	Create <a href="createclass.php">new class</a> here...
      </div>
    </form>
    </div>
  </body>
</html>