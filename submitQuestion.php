<?php
	session_start();
	require_once('dbconnect.php');

	$name;
	$myText = $_POST['myText'];

	$myText = mysql_real_escape_string($myText);

	if(isset($_SESSION['username'])){
		if(!is_null($_SESSION['username'])){
			$name = "Guest";
		}
	}
	else{
		$name = "Guest";
	}

	$query = $conn->query("INSERT INTO notes VALUES ('$myText', '$name')");
	if($query){
		echo '1';
	}
?>