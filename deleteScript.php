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

?>

<!DOCTYPE html>
<html>
<body>


<?php
if ($result) {
?>
    <div>
        The record <?php echo $_POST['id'] ?> has been deleted.
    </div>

<?php
} else {
    die("Database query failed.");
}

?>

<a href="phpForAdminPage.php">Back to admin page</a>


	</body>
	</html>
