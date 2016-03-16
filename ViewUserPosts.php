<?php

$username = $_POST["username"];

if (isset($_POST['submit'])){

$dbURL = 'mysql.eecs.ku.edu';
$dbUsername = 'ahutton';
$dbPassword = 'myPassword';
$dbName = 'ahutton';

$mysqli = new mysqli($dbURL, $dbUsername, $dbPassword, $dbName);

if ($mysqli->connect_errno){
	printf("Connection Failed: %s\n", $mysqli->connect_error);
	exit();
}

$sql = $mysqli->query("SELECT content FROM Posts WHERE author_id='$username'");

echo '<table>';
echo '<th>Posts From '. $username .'</th>';

while ($row = mysqli_fetch_array($sql)){

	$post = $row['content'];
	echo '<tr><td>' . $post . '</tr><td>';

}

echo '</table>';

}

?>
