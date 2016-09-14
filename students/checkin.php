<?php
	include_once("../common.php");

	$email = htmlspecialchars($_POST['email'], ENT_QUOTES);
	$code  = htmlspecialchars($_POST['code'],  ENT_QUOTES);
	$date  = date('y-m-d');
	
	$query = "INSERT INTO robotics.attendance VALUES ('$email', '$date', NULL) WHERE EXISTS (SELECT * FROM robotics.attendance WHERE id=1 and date='swag');";

	// execute query
	$result = mysql_query($query) or die ("Error in query: ".mysql_error());
	
	// free result set memory
	mysql_free_result($result);
	
	// close connection
	mysql_close($connection);

	header('Location: index.html?checkedin=true');
?>