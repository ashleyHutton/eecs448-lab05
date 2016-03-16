<?php

$dbURL = 'mysql.eecs.ku.edu';
$dbUsername = 'ahutton';
$dbPassword = 'myPassword';
$dbName = 'ahutton';

$mysqli = new mysqli($dbURL, $dbUsername, $dbPassword, $dbName);

if ($mysqli->connect_errno){
	printf("Connection Failed: %s\n", $mysqli->connect_error);
	exit();
}


$users = $mysqli->query("SELECT user_id FROM Users");

echo '<table>';
echo '<th> Users </th>';

while ($row = mysqli_fetch_array($users)){
/*
	echo '<tr>';

	foreach($row as $field){
		echo '<td>' . htmlspecialchars($field) . '</td>';
	}	

	echo '</tr>';
*/

	$username = $row['user_id'];

	echo '<tr><td>' . $username . '</td></td>';

}

echo '</table>';

mysqli_close($mysqli);

?>
