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
        <label for="title">Title:</label>
        <input class="inputs" id="title" type="text" name="title" placeholder="Enter title here...">
      </div>
      <div class="input">
        <label for="classcode">Classcode:</label>
        <input class="inputs" id="classcode" type="text" name="classcode" placeholder="create classcode here preferably enter something like CSE2021...">
      </div>
      <div class="input">
        <label for="pass">Passcode:</label>
        <input class="inputs" id="pass" type="password" name="passcode" placeholder="Enter class passcode...">
      </div>
      <div class="input">
        <label for="copass">Confirm Passcode:</label>
        <input class="inputs" id="copass" type="password" name="confirmpasscode" placeholder="Enter class passcode again...">
      </div>
      <div class="input">
        <input type="submit" value="Create new class!" class="submit">
      </div>
  </div>
</form>
</body>
</html>