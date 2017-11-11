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
	$query .= "FROM football ";
	$query .= "ORDER BY id ASC";


	$result = mysqli_query($connection, $query);
	

?>
<?php
//  Code to iterate through all the rows 

// 3. Use returned data (if any)
	while($pages = mysqli_fetch_assoc($result)) {
// output data from each row

?>

<?php
// This pulls the data and publishes it for each column
php echo $pages["first_name"]; 

}

?>





