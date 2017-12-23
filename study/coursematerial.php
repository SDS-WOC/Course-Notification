<?php
require '../config.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
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
	<div>
		<h1>Subjects:</h1>
	</div>
	<div class="content">
		<?php
		$class = $_SESSION['class'];
		$sql = $mysqli->query("SELECT * FROM subjects WHERE class = '$class'");
		while($row=$sql->fetch_assoc())
		{
			echo '<div class="item"><a class="items" href="subjectcontents.php?subject='.$row['code'].'">'.$row['code'].' - '.$row['title'].'</a></div>';
		}
		?>
	</div>
</body>
</html>