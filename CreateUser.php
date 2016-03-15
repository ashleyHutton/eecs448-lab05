
<?php

$username = $_POST["username"];

if (isset($_POST['submit'])){

if ($username == ""){
	echo "Username can't be blank!";
}
else {

$dbURL = 'mysql.eecs.ku.edu';
$dbUsername = 'ahutton';
$dbPassword = 'myPassword';
$dbName = 'ahutton';


$mysqli = new mysqli($dbURL, $dbUsername, $dbPassword, $dbName);

if ($mysqli->connect_errno){
	printf("Connection Failed: %s\n", $mysqli->connect_error);
	exit();
}

$checkDuplicate = $mysqli->query("SELECT user_id FROM Users WHERE user_id='$username'");

if ($checkDuplicate->num_rows === 0){

$sql = "INSERT INTO Users (user_id) VALUES ('$username')";

if ($mysqli->query($sql) === TRUE) {
	echo "Success!";
}

else {
	echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
}
}
else {
	echo "Username already exists!";
}

mysqli_close($mysqli);
}
}

?>
