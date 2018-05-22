<?php

$host = 'localhost';
$database = 'comments';
$username = 'michaelpelevin';
$password = 'phpMyAdmin';

$email=$_POST['email'];
$name=$_POST['name'];
$message=$_POST['message'];
$date = date("Y-m-d H:i:s");

$mysqli = new mysqli($host, $username, $password, $database);
if ($mysqli->connect_errno) {
    printf("Could not connect: %s\n", $mysqli->connect_error);
    exit();
}
if (!$mysqli->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $mysqli->error);
    exit();
}

$email=$mysqli->real_escape_string($email);
$name=$mysqli->real_escape_string($name);;
$message=$mysqli->real_escape_string($message);;

mysqli_select_db($mysqli, $database) or die( "Unable to select database");

$query = "INSERT INTO comment 
          VALUES('','$email','$name','$message','$date')";
$result = mysqli_query($mysqli, $query) or die("Error " . mysqli_error($mysqli));

header("Location: ".$_SERVER["HTTP_REFERER"]);

if(!empty($email) && !empty($name) && !empty($message)){
("#commentBlock").append("<div class='comment'>Автор: <strong>".$email."</strong><br>"
.$name."<br>".$message."<br>".$date."<br></div>");
}

$mysqli->close();
?>