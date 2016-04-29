<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = 'project2';
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if(!$conn){
		die('Could not connect: ' . mysql_error());
	}
?>