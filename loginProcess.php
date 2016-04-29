<?php
	//Check if user exists
	session_start();
	require_once('dbconnect.php');
	$email = $_POST['email'];
	$password = $_POST['password'];

	$email = mysql_real_escape_string($email);
	$password = mysql_real_escape_string($password);

	$request = $conn->query("SELECT * FROM user WHERE user.email = '$email'");
	$rows = $request->num_rows;

	if($rows == 1){
		$user = $request->fetch_array();
		if(password_verify($password, $user['password'])){
			$_SESSION['username'] = $user['email'];
			$_SESSION['permissions'] = $user['permissions'];
			echo '1';
		}
	}
	else{
		$_SESSION['username'] = NULL;
		$_SESSION['permissions'] = NULL;
		echo '0';
	}
?>