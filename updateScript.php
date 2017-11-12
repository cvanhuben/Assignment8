<?php
	// 1. Create a database connection
	$dbhost = "66.147.242.186";
	$dbuser = "urcscon3_queens";
	$dbpass = "coffee1N";
	$dbname = "urcscon3_queens";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	$id = $_POST['id'];
	$updatedField1 = Trim(stripslashes($_POST['field1']));
	$updatedField2 =  Trim(stripslashes($_POST['field2']));

	$query  = "UPDATE mytable SET ";
	$query .= "databaseField1 = '$updatedField1', databaseField1 = '$updatedField2' ";
	$query .= "WHERE id = {$id}";
	$result = mysqli_query($connection, $query);
?>
