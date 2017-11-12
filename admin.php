<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta content="Queens Survey" name="description">
	<meta content="Queens" name="author">
	<link rel="icon" href="images/icon.png">
	<title>Queens Survey</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="css/overrides.css"/>
</head>

<body>

	<nav>
    <ul>
			<li >
				<a href="index.php">Home</a>
			</li>
			<li>
				<a href="survey.php">Survey</a>
			</li>
			<li>
				<a href="#">Admin Log In</a>
			</li>
		</ul>
  </nav>

	<div class="container">
		<h1>Admin Page</h1>
	</div>


<!-- This is to be used at the top of the file -->

<?php
	// 1. Create a database connection
	$dbhost = "66.147.242.186";
	$dbuser = "urcscon3_queens";
	$dbpass = "coffee1N";
	$dbname = "urcscon3_queens";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


	// 2. Perform database query
	$query  = "SELECT * ";
	$query .= "FROM form ";
	$query .= "ORDER BY id ASC";


	$result = mysqli_query($connection, $query);
	

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

	<table border>

<!-- <tr>
			<th>id</th>			
			<th>First Name</th>
			<th>Last Name</th>
			
		</tr> -->
<?php
	// 3. Use returned data (if any)
	
	while($pages = mysqli_fetch_assoc($result)){
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
			

		<?php } ?>



	</table>
<br>


	<form method="post" action="deleteScript.php">
		<div>
			
			<label for="id">Enter ID to Delete: </label>
			<input type="text" name="id">
		</div>
		<br>
		<input type="submit" value="Submit">
	</form>

	<br>

	<form method="post" action="updateSurvey.php">
		<div>
			
			<label for="id">Enter ID to Update: </label>
			<input type="text" name="id">
		</div>
		<br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>


<?php
	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>




	<footer>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
	</footer>

</body>
</html>
