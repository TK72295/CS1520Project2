<?php
	session_start();
	require('dbconnect.php');
	$email = $_POST['email'];
	$password = $_POST['password'];

	$email = mysql_real_escape_string($email);
	$password = mysql_real_escape_string($password);

	$request = $conn->query("SELECT * FROM user WHERE user.email = '$email'");
	$rows = $request->num_rows;

	//This email is already being used
	if($rows == 1){
		$_SESSION['error'] = 'used';
		echo '0';
	}
	//Add to database and log user in
	else{
		$securepassword = password_hash($password, PASSWORD_DEFAULT);
		$insert = $conn->query("INSERT INTO user VALUES ('$email', '$securepassword', '', 0)");

		$_SESSION['username'] = $email;
		$_SESSION['permissions'] = 0;
		echo '1';
	}
?>