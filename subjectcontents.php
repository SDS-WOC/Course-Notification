<?php
require 'config.php';
session_start();
$subject=$_GET['subject'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<div class="header">
		<div class="header left">
			<h1> </h1>
		</div>
		<div class="header right">
			<?php
			echo "Welcome ".$_SESSION['name'];
			?>
			<form action="logout.php">
				<input class="logout" type="submit" value="logout">
			</form>
		</div>
	</div>
	<div class="content">
		<table>
			<tr>
				<th>S.no.</th>
				<th>Title</th>
				<th>Type</th>
				<th>Description</th>
				<th>Date</th>
				<th>Uploader</th>
			</tr>
			<?php
			$class = $_SESSION['class'];
			$sql = $mysqli->query("SELECT * FROM studymaterial WHERE class = '$class' and subject = '$subject'");
			while($row = $sql->fetch_assoc())
			{
				echo '<tr><td></td>';
				echo '<td><a href="class - '.$class.'/studymaterial/';
				echo $subject.'/'.$row['type'].'/'.$row['title'].'">'.$row['title'].'</a></td>';
				echo '<td>'.$row['type'].'</td>';
				echo '<td>'.$row['description'].'</td>';
				echo '<td>'.$row['dated'].'</td>';
				echo '<td>'.$row['uploader'].'</td></tr>';
			}
			?>
		</table>
	</div>
</body>
</html>