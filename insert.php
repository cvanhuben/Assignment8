<?php
	// 1. Create a database connection
	$dbhost = '66.147.242.186';
	$dbuser = 'urcscon3_queens';
	$dbpass = 'coffee1N';
	$dbname = 'urcscon3_queens';

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// Often these are form values in $_POST



	$firstName = Trim(stripslashes($_POST['first']));
	$lastName = Trim(stripslashes($_POST['last']));




	// Escape all strings
	$firstName = mysqli_real_escape_string($connection, $firstName);
	$lastName = mysqli_real_escape_string($connection, $lastName);





	// 2. Perform database query
	$query  = "INSERT INTO form (";
	$query .= "first_name, last_name";
	$query .= ") VALUES (";
	$query .= "  '{$firstName}', '{$lastName}'";
	$query .= ")";

	$result = mysqli_query($connection, $query);

?>

<!doctype html>
<html>
<head>
	<title>Test Page</title>
</head>
<body>

	

<?php
	if ($result) {
		echo "Success! - the query didn't error-out";

?>


<?php

	} else {
		die("Database query failed.");
	}
?>


</body>
</html>


<?php
	// 5. Close database connection
	mysqli_close($connection);
?>