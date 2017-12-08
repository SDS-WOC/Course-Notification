<?php

//connection variables
$host = 'localhost';
$user = 'root';
$password = 'passwd';

//create mysql connection
$mysqli = new mysqli($host,$user,$password);
if ($mysqli->connect_errno) {
    printf("Connection failed: %s\n", $mysqli->connect_error);
    die();
}

//create the database
if ( !$mysqli->query('CREATE DATABASE data') ) {
    printf("Errormessage: %s\n", $mysqli->error);
}
//create users table with all the fields
$mysqli->query('
CREATE TABLE `data`.`users` 
(
    `id` INT NOT NULL AUTO_INCREMENT,
    `first_name` VARCHAR(50) NOT NULL,
     `last_name` VARCHAR(50) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `password` VARCHAR(100) NOT NULL,
    `course` VARCHAR(255) NOT NULL,
    `hash` VARCHAR(32) NOT NULL,
    `active` BOOL NOT NULL DEFAULT 0,
PRIMARY KEY (`id`) 
);') or die($mysqli->error);
$mysqli->query('
CREATE TABLE `data`.`courses` 
(
    `id` INT NOT NULL AUTO_INCREMENT,
    `course` VARCHAR(100) NOT NULL,
    `passcode` VARCHAR(100) NOT NULL,
    `nost` INT(11) NOT NULL,
    PRIMARY KEY (`id`) 
);') or die($mysqli->error);
$mysqli->query('
CREATE TABLE `data`.`lectures`
(
    `id` INT NOT NULL AUTO_INCREMENT,
    `lectno` INT(11) NOT NULL,
    `course` VARCHAR(255) NOT NULL,
    `subject` VARCHAR(255) NOT NULL,
    `title` VARCHAR(100) NOT NULL,
    `lect` LONGBLOB NOT NULL,
    PRIMARY KEY (`id`) 
);') or die ($mysqli->error);
?>