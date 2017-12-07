<!DOCTYPE html>
<html>

<head>
	<title>Course and Event Notification App</title>

	<style>
		
		body {
			 background: url(downloa.jpg) no-repeat;
  background-size: 100% 100%;
			font-family: Calibri;
		}

		.wrapper {
			margin: auto;
			width: 100%;
			max-width: 960px;
		}
		.wrapper h3 {
			display: block;
			margin: 0px;
			width: 90%;
			background: #999;
			text-align: center;
			font-size: 60px;
			padding: 5%;
		}
		
		#login {
			background:#aa0;
			padding: 10px 20px;
			float: right;
		}
		#main-content {
			background: #103;
			padding-bottom: 100px;
		}


		#content {
			float: left;
			margin-left: 50px;
			margin-top: 100px;
		}

		#content p {
			color: #fff;
		}

		#main-content:after {
			content: "";
			display: block;
			clear: both;
		}

	</style>

</head>

<body>

	<div class="wrapper">
		<div id="login">
				<form action=index.php method="post">
					<b>Login</b><br><br>
					username:<input type="text" name="username">
					password: <input type="text" name="pwd"><br>
					<div id="login"><input type="submit" name="Login">
					</div>
				</form>
		</div>


		<div id="main-content">
			<div id="content">
			<?php
$servername = "localhost";
$username = "root";
$password = "passwd";

// Create connection
$conn = mysqli_connect($servername, $username, $password, "hola");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$sql="INSERT INTO a (username, password, email) VALUES('hahahola', 'ICANIWILL', 'anything')";
if ($conn->query($sql)===TRUE){
	echo "GETUPKID";
}
?>
				</div>
		</div>
	</div>

</body>
</html>
