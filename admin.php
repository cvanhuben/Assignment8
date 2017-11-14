<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta content="Queens Survey" name="description">
	<meta content="Queens" name="author">
	<link rel="icon" href="images/icon.png">
	<title>Queens Admin</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rufina" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="css/overrides.css"/>
</head>

<body>

	<nav>
    <ul>
			<li >
				<a href="#!" class="disabled">Admin Access</a>
			</li>
		</ul>
  </nav>

  	<div class="sm-parallax parallax-container center valign-wrapper">
	  <div class="parallax">
	    <img src="images/fruits.jpg">
	  </div>
	</div>


	<div class="container">
		<h1 class="center white-text">Fruits</h1>

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

		<form class="admin-opt" method="post" action="deleteScript.php">
			<div>
				<label for="id">Enter ID to Delete: </label>
				<input type="text" name="id">
			</div>
			<input class="btn waves-light red lighten-2" type="submit" value="Delete">
		</form>


		<form class="admin-opt" method="post" action="updateSurvey.php">
			<div>
				<label for="id">Enter ID to Update: </label>
				<input type="text" name="id">
			</div>
			<input class="btn waves-light red lighten-2" type="submit" value="Update">
		</form>


		<table class="bordered responsive-table highlight">
			<thead>
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
					<th>Email</th>
					<th>Q1</th>
					<th>Q2</th>
					<th>Q3</th>
					<th>Q4</th>
					<th>Q5</th>
					<th>Q6</th>
					<th>Q7</th>
					<th>Q8</th>
					<th>Q9</th>
					<th>Q10</th>
					<th>Q11</th>
					<th>Q12</th>
					<th>Q13</th>
        </tr>
      </thead>
			<tbody>

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

			</tbody>
		</table>
	</div>

<?php
	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>

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
