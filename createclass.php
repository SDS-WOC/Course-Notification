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
    <form action="classcreater.php" method="post">
      <div class="input">
        <label> Title: <input class="inputs" type="text" name="title" placeholder="Enter title here...">
        </label>
      </div>
      <div class="input">
        <label>Classcode: <input class="inputs" type="text" name="classcode" placeholder="create classcode here preferably enter something like CSE2021...">
        </label>
      </div>
      <div class="input">
        <label>Passcode: <input class="inputs" type="password" name="passcode" placeholder="Enter class passcode...">
        </label>
      </div>
      <div class="input">
        <label>Confirm Passcode: <input class="inputs" type="password" name="confirmpasscode" placeholder="Enter class passcode again...">
        </label>
      </div>
      <div class="input">
        <input type="submit" value="Create new class!" class="submit">
      </div>
  </div>
</form>
</body>
</html>