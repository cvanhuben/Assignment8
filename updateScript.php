<?php

	session_start();
	// 1. Create a database connection
	$dbhost = "66.147.242.186";
	$dbuser = "urcscon3_queens";
	$dbpass = "coffee1N";
	$dbname = "urcscon3_queens";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// $id = $_POST['id'];
	// $updatedField1 = Trim(stripslashes($_POST['field1']));
	// $updatedField2 =  Trim(stripslashes($_POST['field2']));

	// $query  = "UPDATE mytable SET ";
	// $query .= "databaseField1 = '$updatedField1', databaseField1 = '$updatedField2' ";
	// $query .= "WHERE id = {$id}";
	// $result = mysqli_query($connection, $query);


	$id = $_SESSION["id"]; 


// first name
	if(!empty($_POST['first'])){
	$first_name = Trim(stripslashes($_POST['first']));
	$first_name = mysqli_real_escape_string($connection, $first_name);
		$query = "UPDATE form SET
		first_name = '$first_name'
		WHERE id = $id
		";
	$result = mysqli_query($connection, $query);
	}

// last name
	if(!empty($_POST['last'])){
	$last_name = Trim(stripslashes($_POST['last']));
	$last_name = mysqli_real_escape_string($connection, $last_name);
		$query = "UPDATE form SET
		last_name = '$last_name'
		WHERE id = $id
		";
	$result = mysqli_query($connection, $query);
	}

	// email

	if(!empty($_POST['email'])){
	$email = Trim(stripslashes($_POST['email']));
	$email = mysqli_real_escape_string($connection, $email);
		$query = "UPDATE form SET
		email = '$email'
		WHERE id = $id
		";
	$result = mysqli_query($connection, $query);
	}

	// everyday

	if(!empty($_POST['everyday'])){
	$everyday = Trim(stripslashes($_POST['everyday']));
	$everyday = mysqli_real_escape_string($connection, $everyday);
		$query = "UPDATE form SET
		fruit_everyday = '$everyday'
		WHERE id = $id
		";
	$result = mysqli_query($connection, $query);
	}

// per_day

	if(!empty($_POST['per_day'])){
	$per_day = Trim(stripslashes($_POST['per_day']));
	$per_day = mysqli_real_escape_string($connection, $per_day);
		$query = "UPDATE form SET
		fruit_per_day = '$per_day'
		WHERE id = $id
		";
	$result = mysqli_query($connection, $query);
	}

	//buy

	if(!empty($_POST['buy'])){
	foreach ($_POST['buy'] as $buy) {
		
		$buy .= $buy.",";
	}
	$_POST['buy'] = implode(", ", $_POST['buy']);
	$buy = Trim(stripslashes($_POST['buy']));
	$buy = mysqli_real_escape_string($connection, $buy);
		$query = "UPDATE form SET
		fruit_buy = '$buy'
		WHERE id = $id
		";
	$result = mysqli_query($connection, $query);
	}

	// as

	if(!empty($_POST['as'])){

		foreach ($_POST['as'] as $as) {
		$as .= $as.",";
	}

	$_POST['as'] = implode(", ", $_POST['as']);
	$as = Trim(stripslashes($_POST['as']));
	$as = mysqli_real_escape_string($connection, $as);
		$query = "UPDATE form SET
		fruit_as = '$as'
		WHERE id = $id
		";
	$result = mysqli_query($connection, $query);
	}

	// fruit frequency

	if(!empty($_POST['frequency'])){
	$frequency = Trim(stripslashes($_POST['frequency']));
	$frequency = mysqli_real_escape_string($connection, $frequency);
		$query = "UPDATE form SET
		fruit_frequency = '$frequency'
		WHERE id = $id
		";
	$result = mysqli_query($connection, $query);
	}

// spend

	if(!empty($_POST['spend'])){
	$spend = Trim(stripslashes($_POST['spend']));
	$spend = mysqli_real_escape_string($connection, $spend);
		$query = "UPDATE form SET
		fruit_spend = '$spend'
		WHERE id = $id
		";
	$result = mysqli_query($connection, $query);
	}

	// store

	if(!empty($_POST['store'])){
	$store = Trim(stripslashes($_POST['store']));
	$store = mysqli_real_escape_string($connection, $store);
		$query = "UPDATE form SET
		fruit_store = '$store'
		WHERE id = $id
		";
	$result = mysqli_query($connection, $query);
	}

// fruit reason
	if(!empty($_POST['reason'])){
	
	foreach ($_POST['reason'] as $reason) {
		$reason .= $reason.",";
	}

	$_POST['reason'] = implode(", ", $_POST['reason']);

	$reason = Trim(stripslashes($_POST['reason']));
	$reason = mysqli_real_escape_string($connection, $reason);
		$query = "UPDATE form SET
		fruit_reason = '$reason'
		WHERE id = $id
		";
	$result = mysqli_query($connection, $query);
	}

	// important

	if(!empty($_POST['important'])){
	
	foreach ($_POST['important'] as $important) {
		$important .= $important.",";
	}

	$_POST['important'] = implode(", ", $_POST['important']);

	$important = Trim(stripslashes($_POST['important']));
	$important = mysqli_real_escape_string($connection, $important);
		$query = "UPDATE form SET
		fruit_important = '$important'
		WHERE id = $id
		";
	$result = mysqli_query($connection, $query);
	}

	// difficult

	if(!empty($_POST['difficult'])){
	
	foreach ($_POST['difficult'] as $difficult) {
		$difficult .= $difficult.",";
	}


	$_POST['difficult'] = implode(", ", $_POST['difficult']);


	$difficult = Trim(stripslashes($_POST['difficult']));
	$difficult = mysqli_real_escape_string($connection, $difficult);
		$query = "UPDATE form SET
		fruit_difficult = '$difficult'
		WHERE id = $id
		";
	$result = mysqli_query($connection, $query);
	}

	//drink
	
		if(!empty($_POST['drink'])){
	$drink = Trim(stripslashes($_POST['drink']));
	$drink = mysqli_real_escape_string($connection, $drink);
		$query = "UPDATE form SET
		fruit_drink = '$drink'
		WHERE id = $id
		";
	$result = mysqli_query($connection, $query);
	}

	// ingredients


		if(!empty($_POST['ingredients'])){
	$ingredients = Trim(stripslashes($_POST['ingredients']));
	$ingredients = mysqli_real_escape_string($connection, $ingredients);
		$query = "UPDATE form SET
		fruit_ingredients = '$ingredients'
		WHERE id = $id
		";
	$result = mysqli_query($connection, $query);
	}

	// agree
		if(!empty($_POST['agree'])){
	$agree = Trim(stripslashes($_POST['agree']));
	$agree = mysqli_real_escape_string($connection, $agree);
		$query = "UPDATE form SET
		fruit_agree = '$agree'
		WHERE id = $id
		";
	$result = mysqli_query($connection, $query);
	}
	


	$query = "SELECT * 
	FROM form 
	WHERE id = $id
	";

	$result = mysqli_query($connection, $query);
	$pages = mysqli_fetch_assoc($result);
?>


<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta content="Queens Survey" name="description">
	<meta content="Queens" name="author">
	<link rel="icon" href="images/icon.png">
	<title>Update Script</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="css/overrides.css"/>
</head>

<body>

	
<p>Record <?php echo $_SESSION['id']?> was updated</p>


<a href="admin.php">Back to admin page</a>
	
	<?php 
	mysqli_free_result($result);

	mysqli_close($connection); ?>

	<footer>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
	</footer>
</body>
</html>