<?php

$username = $_POST["username"];

$dbURL = 'mysql.eecs.ku.edu';
$dbUsername = 'ahutton';
$dbPassword = 'myPassword';'
$dbName = 'ahutton';

/*
$mysqli = new mysqli($dbURL, $dbUsername, $dbPassword, $dbName);

if ($mysqli->connect_errno){
	printf("Connection Failed: %s\n", $mysqli->connect_error);
	exit();
}

$sql = "INSERT INTO Users (user_id) VALUES ($username)";

if (mysqli_query($mysqli, $sql){
	echo "Success!";
}
else {
	echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
}

mysqli_close($mysqli);
*/
?>
