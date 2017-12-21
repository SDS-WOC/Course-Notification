<?php
session_start();
require 'config.php';
if($_SESSION['loggedin']=="")
{
	$_SESSION['message'] = "Please sign in to view this page.";
	header("location: index.php");
}
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
			$_SESSION['message'] = "";
			?>
			<form action="logout.php">
				<input class="logout" type="submit" value="logout">
			</form>
		</div>
	</div>
	<div class="column">
		<div class="column side">
			<h3>
				<a href="coursematerial.php">Course-Material</a>
			</h3>
			<div class="uplbuttontext">
				<a class="uplbuttons" href="uploadmaterial.php">upload material</a>
			</div>
			</div>
		<div class="column middle">
			<h3>
				<a href="announcements.php">Announcements</a>
			</h3>
			<div class="uplbuttontext">
				<a class="uplbuttons" href="uploadannouncement.php">upload announcement</a>		
			</div>
			</div>
		<div class="column side">
			<h3>
				<a href="events.php">Events</a>
			</h3>
			<div class="uplbuttontext">
				<a class="uplbuttons" href="uploadevent.php">create new event</a>
			</div>
			</div>
	</div>

</body>
</html>