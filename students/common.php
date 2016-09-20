<?php
	// Database settings
	$username = "local";
	$password = "";
	$host = "localhost";
	$dbname = "dmcs"; 
	$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

	// Try to make a connection
	try {
		$db = new PDO(
			"mysql:host={$host}; dbname={$dbname}; charset=utf8",
			$username,
			$password,
			$options);
	}

	// Fail safely
	catch(PDOException $ex) {
		die("Failed to connect to the database: " . $ex->getMessage());
	}

	// Apply our prefs
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

	// Makes "magic quote" functions
	if(function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc()) {
		function undo_magic_quotes_gpc(&$array) {

			foreach($array as &$value) {

				if(is_array($value)) {
					undo_magic_quotes_gpc($value);
				}

				else {
					$value = stripslashes($value);
				}
			}
		}

		undo_magic_quotes_gpc($_POST);
		undo_magic_quotes_gpc($_GET);
		undo_magic_quotes_gpc($_COOKIE);
	}

	// Tell browser what we're sending
	header('Content-Type: text/html; charset=utf-8');

	// Start a session
	session_start();
?>
