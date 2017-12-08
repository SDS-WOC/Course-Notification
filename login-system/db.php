<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = 'passwd';
$db = 'data';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
?>