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
    <form action="classcreater.php" method="post">
      <div id="input">
        Title: <input type="text" name="title" placeholder="Enter title here..." id="inputs">
      </div>
      <div id="input">
        Classcode: <input type="text" name="classcode" placeholder="create classcode here preferably enter something like CSE2021..." id="inputs">
      </div>
      <div id="input">
        Passcode: <input type="text" name="passcode" placeholder="Enter class passcode..." id="inputs">
      </div>
      <div id="input">
        Confirm Passcode: <input type="password" name="confirmpasscode" placeholder="Enter class passcode again..." id="inputs">
      </div>
      <div id="inputs">
        <input type="submit" value="Create new class!" id="submit">
      </div>
  </div>
</form>
</body>
</html>