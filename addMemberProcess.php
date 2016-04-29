<?php
	//Insert new member into database
	session_start();
	require_once('dbconnect.php');
	$name = $_POST['name'];
	$rank = $_POST['rank'];
	$year = $_POST['year'];
	$position = $_POST['position'];

	$name = mysql_real_escape_string($name);
	$rank = mysql_real_escape_string($rank);
	$year = intval($year);
	$position = mysql_real_escape_string($position);

	$request = $conn->query("INSERT INTO members VALUES ('$name', '$rank', $year, '$position')");
	if($request){
		echo '1';
	}
	else{
		echo '0';
	}
?>