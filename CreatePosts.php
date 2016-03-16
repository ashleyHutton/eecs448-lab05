
<?php

$username = $_POST["username"];
$content = $_POST["content"];

if (isset($_POST['submit'])){

if ($content == ""){
	echo "Content can't be blank!";
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

$existingUser = $mysqli->query("SELECT user_id FROM Users WHERE user_id='$username'");

if ($existingUser->num_rows === 0){

$sql = "INSERT INTO Posts (author_id, content) VALUES ('$username', '$content'";


if ($mysqli->query($sql) === TRUE) {
	echo "Success!";
}

else {
	echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
}
}
else {
	echo "You must be an existing user to post!";
}

mysqli_close($mysqli);
}
}

?>
