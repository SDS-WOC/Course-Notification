<?php
session_start();
//TODO:currently only for debugging, create UI.
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	echo $_SESSION['message'];
	?>
</body>
</html>