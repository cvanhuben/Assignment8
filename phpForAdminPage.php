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

	<h1>test</h1>

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

</body>
</html>


<?php
	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>
