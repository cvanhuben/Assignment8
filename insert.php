<?php
	// 1. Create a database connection
	$dbhost = '66.147.242.186';
	$dbuser = 'urcscon3_queens';
	$dbpass = 'coffee1N';
	$dbname = 'urcscon3_queens';

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// Often these are form values in $_POST

	// iterate through check boxes to make one long string
	// https://stackoverflow.com/questions/26014920/multiple-values-into-mysql-from-checkbox

	
	
if(isset($_POST['submit'])){
	foreach ($_POST['buy'] as $fruit_buy) {
		
		$fruit_buy .= $fruit_buy.",";

	}

}

if(isset($_POST['submit'])){

	foreach ($_POST['as'] as $fruit_as) {
		$fruit_as .= $fruit_as.",";
	}
}

if(isset($_POST['submit'])){

	foreach ($_POST['reason'] as $fruit_reason) {
		$fruit_reason .= $fruit_reason.",";
	}
}
if(isset($_POST['submit'])){
	foreach ($_POST['important'] as $fruit_important) {
		$fruit_important .= $fruit_important.",";
	}
}
if(isset($_POST['submit'])){
	foreach ($_POST['difficult'] as $fruit_difficult) {
		$fruit_difficult .= $fruit_difficult.",";
	}
}

	$_POST['buy'] = implode(", ", $_POST['buy']);
	$_POST['as'] = implode(", ", $_POST['as']);
	$_POST['reason'] = implode(", ", $_POST['reason']);
	$_POST['important'] = implode(", ", $_POST['important']);
	$_POST['difficult'] = implode(", ", $_POST['difficult']);

	$firstName = Trim(stripslashes($_POST['first']));
	$lastName = Trim(stripslashes($_POST['last']));
	$email = Trim(stripslashes($_POST['email']));
	$fruit_everyday = Trim(stripslashes($_POST['everyday']));
	$fruit_per_day= Trim(stripslashes($_POST['per_day']));
	$fruit_buy= Trim(stripslashes($_POST['buy']));
	$fruit_as= Trim(stripslashes($_POST['as']));
	$fruit_frequency= Trim(stripslashes($_POST['frequency']));
	$fruit_spend= Trim(stripslashes($_POST['spend']));
	$fruit_store= Trim(stripslashes($_POST['store']));
	$fruit_reason= Trim(stripslashes($_POST['reason']));
	$fruit_important= Trim(stripslashes($_POST['important']));
	$fruit_difficult= Trim(stripslashes($_POST['difficult']));
	$fruit_drink= Trim(stripslashes($_POST['drink']));
	$fruit_ingredients= Trim(stripslashes($_POST['ingredients']));
	$fruit_agree= Trim(stripslashes($_POST['agree']));


	// Escape all strings
	$firstName = mysqli_real_escape_string($connection, $firstName);
	$lastName = mysqli_real_escape_string($connection, $lastName);
	$email = mysqli_real_escape_string($connection, $email);
	$fruit_everyday = mysqli_real_escape_string($connection, $fruit_everyday);
	$fruit_per_day = mysqli_real_escape_string($connection, $fruit_per_day);
	$fruit_buy = mysqli_real_escape_string($connection, $fruit_buy);
	$fruit_as = mysqli_real_escape_string($connection, $fruit_as);
	$fruit_frequency = mysqli_real_escape_string($connection, $fruit_frequency);
	$fruit_spend = mysqli_real_escape_string($connection, $fruit_spend);
	$fruit_store = mysqli_real_escape_string($connection, $fruit_store);
	$fruit_reason = mysqli_real_escape_string($connection, $fruit_reason);
	$fruit_difficult = mysqli_real_escape_string($connection, $fruit_difficult);
	$fruit_drink = mysqli_real_escape_string($connection, $fruit_drink);
	$fruit_ingredients = mysqli_real_escape_string($connection, $fruit_ingredients);
	$fruit_agree = mysqli_real_escape_string($connection, $fruit_agree);


	// 2. Perform database query
	$query  = "INSERT INTO form (";
	$query .= "first_name, last_name, email, fruit_everyday, fruit_per_day, fruit_buy, fruit_as, fruit_frequency, fruit_spend, fruit_store
	, fruit_reason, fruit_difficult, fruit_drink, fruit_ingredients, fruit_agree";
	$query .= ") VALUES (";
	$query .= "  '{$firstName}', '{$lastName}', '{$email}', '{$fruit_everyday}', '{$fruit_per_day}', '{$fruit_buy
	}', '{$fruit_as}', '{$fruit_frequency}', '{$fruit_spend}', '{$fruit_store}', '{$fruit_reason}', '{$fruit_difficult}', '{$fruit_drink}', '{$fruit_ingredients}', '{$fruit_agree}'";
	$query .= ")";

	$result = mysqli_query($connection, $query);

	// 5. Close database connection
	mysqli_close($connection);

?>



