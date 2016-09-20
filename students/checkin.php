<?php
	include_once("./common.php");

	$email = htmlspecialchars($_POST['email'], ENT_QUOTES);
	$code  = htmlspecialchars($_POST['code'],  ENT_QUOTES);
	$date  = date('Y-m-d');

	$query = "SELECT * FROM robotics.attendance WHERE id=1;";

	// execute query
	$result = mysql_query($query) or die ("Error in query: ".mysql_error());
	echo "1";

	if ($code == mysql_fetch_array($result)["date"]){
		$query = "INSERT INTO robotics.attendance VALUES ('$email', '$date', NULL);";

		// execute query
		$result = mysql_query($query) or die ("Error in query: ".mysql_error());

		$header = "index.php?checkedin=true";
		echo "1.1";
	}

	else {
		$header = "check-in.php?failed=true";
		echo "1.2";
	}
	echo "2";
	
	// free result set memory
	mysql_free_result($result);
	
	// close connection
	mysql_close($connection);
	echo "3";

	header('Location: ' . $header);
?>