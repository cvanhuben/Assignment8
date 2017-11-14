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

<body id="colorShifter">

	<div class="sm-parallax parallax-container center valign-wrapper">
	  <div class="parallax">
	    <img src="images/fruits.jpg">
	  </div>
	</div>


	<div class="container center promo" id="shaper">
		<h1>Fruit Research Survey</h1>
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
			<br></br>
			<br></br>

		<a class="waves-light btn red lighten-2" href="index.php">Return to Home</a>
			<br></br>
			<br></br>
			<br></br>

	</div>

	<footer class="page-footer">
		<div class="container">
			<h4 class="white-text">Sources</h4>
			<ul>
				<li>
					<a class="grey-text text-lighten-4" href="http://www.marketest.co.uk/market-research-questionnaire/482/fruits">Survey source</a>
				</li>
				<li>
					<a class="grey-text text-lighten-4"
						href="https://www.google.com/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwizz7DFyrjXAhUERSYKHbEJBLMQjRwIBw&url=%2Furl%3Fsa%3Di%26rct%3Dj%26q%3D%26esrc%3Ds%26source%3Dimages%26cd%3D%26cad%3Drja%26uact%3D8%26ved%3D0ahUKEwizz7DFyrjXAhUERSYKHbEJBLMQjRwIBw%26url%3Dhttps%253A%252F%252Fwww.rheumchoice.com%252F%26psig%3DAOvVaw2iojM0NeJFm52kAI334sZR%26ust%3D1510560503872506&psig=AOvVaw2iojM0NeJFm52kAI334sZR&ust=1510560503872506">Frequency Icon</a>
				</li>
				<li>
					<a class="grey-text text-lighten-4" href="https://www.google.com/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwiH6-K7zLjXAhXKSiYKHchlBq0QjRwIBw&url=https%3A%2F%2Ficons8.com%2Ficon%2Ftag%2Forange-juice&psig=AOvVaw2u7CEMOF8EpSi28DdGobSj&ust=1510561023790851">Orange Juice Icon</a>
				</li>
				<li>
					<a class="grey-text text-lighten-4" href="https://www.google.com/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwjCr9SnzbjXAhVGySYKHV3TDXYQjRwIBw&url=https%3A%2F%2Fgallery.yopriceville.com%2FFree-Clipart-Pictures%2FFruit-PNG%2FFruit_Basket_PNG_Vector_Clipart_Image&psig=AOvVaw2ZIyAdHVLMicFkZuUu3JHa&ust=1510561247366109">Fruit Basket Icon</a>
				</li>
			</ul>
    </div>
    <div class="footer-copyright">
      <div class="container">
          © 2017 Copyright
          <span class="right">Created by CSC 174: Queens</span>
			</div>
    </div>
  </footer>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript" src="js/interactions.js"></script>

</body>
</html>
