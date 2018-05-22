<?php
$servername='localhost';
$username="michaelpelevin";
$password="phpMyAdmin";
$database="registration";

// Create connection
$mysqli = new mysqli($host, $username, $password, $database);
if ($mysqli->connect_errno) {
    printf("Could not connect: %s\n", $mysqli->connect_error);
    exit();
}

if (!$mysqli->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $mysqli->error);
    exit();
}

?>