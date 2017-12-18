<?php
session_start();
require 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	echo "Welcome\n";
	echo $_SESSION['name'];
	echo $_SESSION['class'];
	?>
	<a href="lecture.php">hola</a>
</body>
</html>