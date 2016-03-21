<?php

$checked = $_POST['isChecked'];

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

$check = implode("','", $checked);

$sql = $mysqli->query("DELETE FROM Posts WHERE post_id in ('$check')");

if ($sql){
	echo $check . "<br>";
	echo $sql;
	echo "Successfully deleted posts";
}

/*
if (!empty($checked)) {

	$numChecked = count($checked);
		
	for($i=0;$i<count($checked);$i++) {

		echo $checked[$i];

		$sql = $mysqli->query("DELETE FROM Posts WHERE post_id='$checked[$i]'");

		//$rowsChecked = $check['content'];
		//$rowsChecked = $mysqli->query(SELECT content FROM Posts 

	}

	if ($sql){

		echo "Successfully deleted " .$numChecked. " posts.";
	}

}
*/

mysqli_close($mysqli);
}

?>
