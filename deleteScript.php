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
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta content="Queens Survey" name="description">
	<meta content="Queens" name="author">
	<link rel="icon" href="images/icon.png">
	<title>Delete Script</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="css/overrides.css"/>
</head>
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

<a href="admin.php">Back to admin page</a>
<?php 


	mysqli_close($connection); ?>

<footer>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
	</footer>
	</body>
	</html>
