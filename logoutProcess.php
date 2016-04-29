<?php
	session_start();

	$_SESSION['username'] = NULL;
	$_SESSION['permissions'] = NULL;

	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>