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
	  <form action="uploadermaterial.php" method="post" enctype="multipart/form-data">
      <div class="input">
        <label for="subject">Subject:</label>
        <select class="inputs" id="subject" name="subject">
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
        <label for="type">Type:</label>
        <select class="inputs" id="type" name="type">
          <option value="Lectures and slides">Lecture</option>
          <option value="Assignments">Assignment</option>
          <option value="Books">Book</option>
          <option value="Other">Other material</option>
        </select> 
      </div>
      <div class="input">
        <label for="lecture">Lecture file</label>
        <input type="file" id="lecture" name="file" placeholder="file" class="inputs">
      </div>
      <div class="input">
        <label for="descript">Description:</label>
        <input type="text" id="descript" size="100" name="desc" class="inputs">
      </div>
      <div class="input">
        <input type="submit" value="submit" name="submit" class="submit">
      </div>
    </form>
  </div>
</body>
</html>