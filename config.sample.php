<?php
/* Database connection settings */
$host = '';//web or ip address of the server
$user = '';//username
$pass = '';//password
$db = '';//database name
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
?>