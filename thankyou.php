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
	<link href="https://fonts.googleapis.com/css?family=Rufina" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="css/overrides.css"/>
</head>

<body class="colorShifterSingleView">

	<div class="sm-parallax parallax-container center valign-wrapper">
	  <div class="parallax">
	    <img src="images/fruits.jpg">
	  </div>
	</div>


	<div class="container absolute center shaper">
		<h1 id="survey-head">Fruit Research Survey</h1>
		<p>Thank you for your response,
			<?php
				session_start();
				// 1. Create a database connection
				$dbhost = '66.147.242.186';
				$dbuser = 'urcscon3_queens';
				$dbpass = 'coffee1N';
				$dbname = 'urcscon3_queens';

				$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

				// 2. Perform database query
				$query  = "SELECT * ";
				$query .= "FROM form ";
				$query .= "ORDER BY ID DESC LIMIT 1";
				$result = mysqli_query($connection, $query);

				echo mysqli_fetch_assoc($result)["first_name"];

				mysqli_close($connection);
			?>! We value your thoughts on fruit.</p>

		<a class="waves-light btn red lighten-2 tyreturn" href="index.php">Return to Home</a>

	</div>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript" src="js/interactions.js"></script>

</body>
</html>
