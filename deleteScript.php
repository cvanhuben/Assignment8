<?php
	// 1. Create a database connection
	$dbhost = "66.147.242.186";
	$dbuser = "urcscon3_queens";
	$dbpass = "coffee1N";
	$dbname = "urcscon3_queens";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	$query  = "DELETE FROM form ";
	$query .= "WHERE id = {$_POST['id']} ";
	$query .= "LIMIT 1";
	$result = mysqli_query($connection, $query);

	mysqli_close($connection);

	include 'adminty.php';

?>
