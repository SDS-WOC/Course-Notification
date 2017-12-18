<?php
session_start();
require 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
  <div class="form">
	 <form action="upload.php" method="post">
      <div class="input">
        Subject <select class="inputs">
          <?php
          $temp=$_SESSION['class'];
          $sql = $mysqli->query("SELECT * FROM subjects WHERE class = '$temp'");
          while($row=$sql->fetch_assoc())
          {
            echo '<option value='.$row["code"].'> '.$row["code"].' - '.$row["title"].' </option>';
          }
          ?>
        </select> 
      </div>
      <div class="input">
        Lecture <input type="file" name="file" placeholder="file" class="inputs">
      </div>

      <div class="input">
        Description(optional) <input type="text" size="100" name="desc" class="inputs">
      </div>
      
      <div class="input">
        <input type="submit" value="upload" class="submit">
      </div>
    </form>
  </div>
</body>
</html>