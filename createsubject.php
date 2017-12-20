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
    <form action="subjectcreater.php" method="post">
      <div class="input">
        <label for="code">Subject code:</label>
        <input class="inputs" id="code" type="text" name="code" placeholder="Enter subject code here like MAN-001...">
      </div>
      <div class="input">
        <label for="title">Title:</label>
        <input class="inputs" id="title" type="text" name="title" placeholder="enter subject-title">
      </div>
        <div class="input">
        <input type="submit" value="Create new subject!" class="submit">
      </div>
  </div>
</form>
</body>
</html>