<?php

$host = 'localhost';
$user = 'root';
$password = 'passwd';

$mysqli = new mysqli($host,$user,$password);
if ($mysqli->connect_errno) {
    printf("Connection failed: %s\n", $mysqli->connect_error);
    die();
}

if ( !$mysqli->query('CREATE DATABASE data') ) {
    printf("Errormessage: %s\n", $mysqli->error);
}
$mysqli->query('
CREATE TABLE `data`.`users` 
(
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(50) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `password` VARCHAR(100) NOT NULL,
    `class` VARCHAR(255) NOT NULL,
    `hash` VARCHAR(32) NOT NULL,
    `active` BOOL NOT NULL DEFAULT 0,
PRIMARY KEY (`id`) 
);') or die($mysqli->error);
$mysqli->query('
CREATE TABLE `data`.`class` 
(
    `id` INT NOT NULL AUTO_INCREMENT,
    `code` VARCHAR(100) NOT NULL,
    `title` VARCHAR(100) NOT NULL,
    `passcode` VARCHAR(100) NOT NULL,
    `nost` INT(11) NOT NULL,
    PRIMARY KEY (`id`) 
);') or die($mysqli->error);
$mysqli->query('
CREATE TABLE `data`.`lectures`
(
    `id` INT NOT NULL AUTO_INCREMENT,
    `lectno` INT(11) NOT NULL,
    `class` VARCHAR(255) NOT NULL,
    `subject` VARCHAR(255) NOT NULL,
    `title` VARCHAR(100) NOT NULL,
    `lect` LONGBLOB NOT NULL,
    PRIMARY KEY (`id`) 
);') or die ($mysqli->error);
?>