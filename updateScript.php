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

	if(!empty($_POST['first'])){
	$first_name = Trim(stripslashes($_POST['first']));
	$first_name = mysqli_real_escape_string($connection, $first_name);
		$query = "UPDATE form SET
		first_name = '$first_name'
		WHERE id = $id
		";
	$result = mysqli_query($connection, $query);
	}

	if(!empty($_POST['first'])){
	$first_name = Trim(stripslashes($_POST['first']));
	$first_name = mysqli_real_escape_string($connection, $first_name);
		$query = "UPDATE form SET
		first_name = '$first_name'
		WHERE id = $id
		";
	$result = mysqli_query($connection, $query);
	}

	if(!empty($_POST['first'])){
	$first_name = Trim(stripslashes($_POST['first']));
	$first_name = mysqli_real_escape_string($connection, $first_name);
		$query = "UPDATE form SET
		first_name = '$first_name'
		WHERE id = $id
		";
	$result = mysqli_query($connection, $query);
	}

	if(!empty($_POST['first'])){
	$first_name = Trim(stripslashes($_POST['first']));
	$first_name = mysqli_real_escape_string($connection, $first_name);
		$query = "UPDATE form SET
		first_name = '$first_name'
		WHERE id = $id
		";
	$result = mysqli_query($connection, $query);
	}

	if(!empty($_POST['first'])){
	$first_name = Trim(stripslashes($_POST['first']));
	$first_name = mysqli_real_escape_string($connection, $first_name);
		$query = "UPDATE form SET
		first_name = '$first_name'
		WHERE id = $id
		";
	$result = mysqli_query($connection, $query);
	}

	if(!empty($_POST['first'])){
	$first_name = Trim(stripslashes($_POST['first']));
	$first_name = mysqli_real_escape_string($connection, $first_name);
		$query = "UPDATE form SET
		first_name = '$first_name'
		WHERE id = $id
		";
	$result = mysqli_query($connection, $query);
	}

	if(!empty($_POST['first'])){
	$first_name = Trim(stripslashes($_POST['first']));
	$first_name = mysqli_real_escape_string($connection, $first_name);
		$query = "UPDATE form SET
		first_name = '$first_name'
		WHERE id = $id
		";
	$result = mysqli_query($connection, $query);
	}

	if(!empty($_POST['first'])){
	$first_name = Trim(stripslashes($_POST['first']));
	$first_name = mysqli_real_escape_string($connection, $first_name);
		$query = "UPDATE form SET
		first_name = '$first_name'
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
	<title>testAdmin</title>
	<style type="text/css">
		td, th{
			padding: 5px;
		}


	</style>
</head>
<body>

	
<h1>Now Updated</h1>

	<table border>

<!-- <tr>
			<th>id</th>			
			<th>First Name</th>
			<th>Last Name</th>
			
		</tr> -->
<?php
	// 3. Use returned data (if any)
	
	
?>
		<tr>

			<td><?php echo $pages["id"]; ?></td>
			<td><?php echo $pages["first_name"]; ?></td>
			<td><?php echo $pages["last_name"]; ?></td>
			<td><?php echo $pages["email"]; ?></td>
			<td><?php echo $pages["fruit_everyday"]; ?></td>
			<td><?php echo $pages["fruit_per_day"]; ?></td>
			<td><?php echo $pages["fruit_buy"]; ?></td>
			<td><?php echo $pages["fruit_as"]; ?></td>
			<td><?php echo $pages["fruit_frequency"]; ?></td>
			<td><?php echo $pages["fruit_spend"]; ?></td>
			<td><?php echo $pages["fruit_store"]; ?></td>
			<td><?php echo $pages["fruit_reason"]; ?></td>
			<td><?php echo $pages["fruit_important"]; ?></td>
			<td><?php echo $pages["fruit_difficult"]; ?></td>
			<td><?php echo $pages["fruit_drink"]; ?></td>
			<td><?php echo $pages["fruit_ingredients"]; ?></td>
			<td><?php echo $pages["fruit_agree"]; ?></td>






		</tr>
			


	</table>
	<?php mysqli_close($connection); ?>
</body>
</html>