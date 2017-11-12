<?php

session_start();
	// 1. Create a database connection
	$dbhost = "66.147.242.186";
	$dbuser = "urcscon3_queens";
	$dbpass = "coffee1N";
	$dbname = "urcscon3_queens";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


	// 2. Perform database query
	$query  = "SELECT * ";
	$query .= "FROM form ";
	$query .= "WHERE id =  {$_POST['id']}";
	
	$result = mysqli_query($connection, $query);

	$pages = mysqli_fetch_assoc($result);
	
?>

			

<!DOCTYPE html>

<html lang="en">
<head>

		
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta content="Queens Survey" name="description">
	<meta content="Queens" name="author">
	<link rel="icon" href="images/icon.png">
	<title>Queens Update Survey</title>
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
				<a href="#">Survey</a>
			</li>
			<li>
				<a href="admin.php">Admin Log In</a>
			</li>
		</ul>
  </nav>

	<div class="container">
		<h1>Fruit Research Survey</h1>
		<h2>Please answer this survey as honestly as possible, based on your average
			eating and buying habits.</h2>

		<form id="survey" method="post" action="updateScript.php">

		<?php $_SESSION["id"] = $pages["id"]; ?>


			<div class="input-block input-field">
        <input id="first-name" type="text" name= "first">
        <label for="first-name"> Your previous answer was: "<?php echo $pages["first_name"]; ?>" </label>
      </div>

			<div class="input-block input-field">
        <input id="last-name" type="text" name = "last">
        <label for="last-name">Your previous answer was: "<?php echo $pages["last_name"]; ?>"</label>
      </div>

			<div class="input-block input-field">
        <input id="email" type="email" name = "email" class="validate">
        <label for="email">Your previous answer was: "<?php echo $pages["email"]; ?>"</label>
      </div>

			<div class="input-block">
				<p>Do you eat fruits everyday? Your previous answer was: "<?php echo $pages["fruit_everyday"]; ?>"</p>
				<p>
		      <input class="with-gap" name="everyday" type="radio" id="daily-yes" value="Yes" />
		      <label for="daily-yes">Yes</label>
		    </p>
				<p>
		      <input class="with-gap" name="everyday" type="radio" id="daily-no" value="No"/>
		      <label for="daily-no">No</label>
		    </p>
			</div>

			<div class="input-block">
				<p>Approximately how many fruits do you eat per day? Your previous answer was: "<?php echo $pages["fruit_per_day"]; ?>"</p>
				<p>
		      <input class="with-gap" name="per_day" type="radio" id="amount-yikes" value="1 or less" />
		      <label for="amount-yikes">1 or less</label>
		    </p>
				<p>
		      <input class="with-gap" name="per_day" type="radio" id="amount-few" value="2-3" />
		      <label for="amount-few">2-3</label>
		    </p>
				<p>
		      <input class="with-gap" name="per_day" type="radio" id="amount-four" value="4-5" />
		      <label for="amount-four">4-5</label>
		    </p>
				<p>
		      <input class="with-gap" name="per_day" type="radio" id="amount-hella" value="5+" />
		      <label for="amount-hella">5+</label>
		    </p>
			</div>

			<div class="input-block">
				<p>What fruits do you usually eat/buy? Your previous answer was: "<?php echo $pages["fruit_buy"]; ?>"</p>
				<p>
		      <input type="checkbox" class="filled-in" id="apple" name= "buy[]" value="apple" />
		      <label for="apple">Apple</label>
		    </p>
				<p>
		      <input type="checkbox" class="filled-in" id="banana" name= "buy[]" value="banana" />
		      <label for="banana">Banana</label>
		    </p>
				<p>
		      <input type="checkbox" class="filled-in" id="blueberry" name= "buy[]" value="blueberry" />
		      <label for="blueberry">Blueberry</label>
		    </p>
				<p>
		      <input type="checkbox" class="filled-in" id="grape" name= "buy[]" value="grape" />
		      <label for="grape">Grape</label>
		    </p>
				<p>
		      <input type="checkbox" class="filled-in" id="cherry" name= "buy[]" value="cherry" />
		      <label for="cherry">Cherry</label>
		    </p>
				<p>
		      <input type="checkbox" class="filled-in" id="orange" name= "buy[]" value="orange" />
		      <label for="orange">Orange</label>
		    </p>

		    <!-- test -->
		    <p>
		    	<input type ="checkbox" class = "filled-in" id="other" />
		    	<label for="other">Other</label>
		    	<div class="input-block input-field">
        		<input id="other" type="text" name= "buy[]">

      			</div>
			<!--  -->

		    </p>
			</div>

			<div class="input-block">
				<p>What do you have your fruit as? Your previous answer was: "<?php echo $pages["fruit_as"]; ?>"</p>
				<p>
		      <input type="checkbox" class="filled-in" id="snack" name="as[]" value="As a snack" />
		      <label for="snack">As a snack</label>
		    </p>
				<p>
		      <input type="checkbox" class="filled-in" id="breakfast" name="as[]" value="I have a fruit with my breakfast" />
		      <label for="breakfast">I have a fruit with my breakfast</label>
		    </p>
				<p>
		      <input type="checkbox" class="filled-in" id="lunch" name="as[]" value="I have a fruit with my lunch" />
		      <label for="lunch">I have a fruit with my lunch</label>
		    </p>
				<p>
		      <input type="checkbox" class="filled-in" id="dessert" name="as[]" value="I have a fruit as dessert" />
		      <label for="dessert">I have a fruit as dessert</label>
		    </p>
			</div>

			<div class="input-block">
				<p>How often do you visit stores to purchase fruits in a week? Your previous answer was: "<?php echo $pages["fruit_frequency"]; ?>"</p>
				<p>
		      <input class="with-gap" type="radio" id="often-less" name="frequency" value="Less than once a week" />
		      <label for="often-less">Less than once a week</label>
		    </p>
				<p>
		      <input class="with-gap" type="radio" id="often-once" name="frequency" value="Once a week" />
		      <label for="often-once">Once a week</label>
		    </p>
				<p>
		      <input class="with-gap" type="radio" id="often-twice" name="frequency" value="Twice a week" />
		      <label for="often-twice">Twice a week</label>
		    </p>
				<p>
		      <input class="with-gap" type="radio" id="often-thrice" name="frequency" value="3 times a week" />
		      <label for="often-thrice">3 times a week</label>
		    </p>
				<p>
		      <input class="with-gap" type="radio" id="often-hella" name="frequency" value="4 or more times a week" />
		      <label for="often-hella">4 or more times a week</label>
		    </p>
			</div>

			<div class="input-block">
				<p>On average, how much do you spend on fruits per week? Your previous answer was: "<?php echo $pages["fruit_spend"]; ?>"</p>
				<p>
		      <input class="with-gap" type="radio" id="spend-5" name="spend" value="$0-5" />
		      <label for="spend-5">$0-5</label>
		    </p>
				<p>
		      <input class="with-gap" type="radio" id="spend-10" name="spend" value="$6-10" />
		      <label for="spend-10">$6-10</label>
		    </p>
				<p>
		      <input class="with-gap" type="radio" id="spend-15" name="spend" value="$11-15" />
		      <label for="spend-15">$11-15</label>
		    </p>
				<p>
		      <input class="with-gap" type="radio" id="spend-20" name="spend" value="$16-20" />
		      <label for="spend-20">$16-20</label>
		    </p>
				<p>
		      <input class="with-gap" type="radio" id="spend-25" name="spend" value="$21-25" />
		      <label for="spend-25">$21-25</label>
		    </p>
				<p>
		      <input class="with-gap" type="radio" id="spend-30" name="spend" value="$26-30" />
		      <label for="spend-30">$26-30</label>
		    </p>
				<p>
		      <input class="with-gap" type="radio" id="spend-hella" name="spend" value="$30+" />
		      <label for="spend-hella">$30+</label>
		    </p>
			</div>

			<div class="input-block input-field">
        <input id="where" type="text" name="store">
        <label for="where">Where do you buy your fruits from? Your previous answer was: "<?php echo $pages["fruit_store"]; ?>"</label>
      </div>

			<div class="input-block">
				<p>Why do you purchase fruit? Your previous answer was: "<?php echo $pages["fruit_reason"]; ?>"</p>
				<p>
		      <input type="checkbox" class="filled-in" id="fresh" name="reason[]" value="To eat fresh" />
		      <label for="fresh">To eat fresh</label>
		    </p>
				<p>
		      <input type="checkbox" class="filled-in" id="freeze" name="reason[]" value="To freeze or later use" />
		      <label for="freeze">To freeze or later use</label>
		    </p>
				<p>
		      <input type="checkbox" class="filled-in" id="cooking" name="reason[]" value="For cooking" />
		      <label for="cooking">For cooking</label>
		    </p>
				<p>
		      <input type="checkbox" class="filled-in" id="facemasks" name="reason[]" value="To create face masks" />
		      <label for="facemasks">To create face masks</label>
		    </p>
				<p>
		      <input type="checkbox" class="filled-in" id="health" name="reason[]" value="To be healthy" />
		      <label for="health">To be healthy</label>
		    </p>
			</div>

			<div class="input-block">
				<p>What’s the most important thing you consider when buying fruits? Your previous answer was: "<?php echo $pages["fruit_important"]; ?>"</p>
				<p>
		      <input type="checkbox" class="filled-in" id="price" name= important[] value="Price" />
		      <label for="price">Price</label>
		    </p>
				<p>
		      <input type="checkbox" class="filled-in" id="brand" name="important[]" value="Brand" />
		      <label for="brand">Brand</label>
		    </p>
				<p>
		      <input type="checkbox" class="filled-in" id="date" name="important[]" value="Expiration date" />
		      <label for="date">Expiration date</label>
		    </p>
				<p>
		      <input type="checkbox" class="filled-in" id="nutrient" name="important[]" value="Nutrient needs" />
		      <label for="nutrient">Nutrient needs</label>
		    </p>
				<p>
		      <input type="checkbox" class="filled-in" id="condition" name="important[]" value="Condition of fruit" />
		      <label for="condition">Condition of fruit</label>
		    </p>
				<p>
		      <input type="checkbox" class="filled-in" id="like" name="important[]" value="I like the fruit" />
		      <label for="like">I like the fruit</label>
		    </p>
			</div>

			<div class="input-block">
				<p>Please select the things that make it difficult for you to buy fruits. Your previous answer was: "<?php echo $pages["fruit_difficult"]; ?>"</p>
				<p>
		      <input type="checkbox" class="filled-in" id="difficult-condition" name="difficult[]" value="Condition of fruit" />
		      <label for="difficult-condition">Condition of fruit</label>
		    </p>
				<p>
		      <input type="checkbox" class="filled-in" id="difficult-price" name="difficult[]" value="Price" />
		      <label for="difficult-price">Price</label>
		    </p>
				<p>
		      <input type="checkbox" class="filled-in" id="difficult-where" name="difficult[]" value="Not sure where to buy fruits" />
		      <label for="difficult-where">Not sure where to buy fruits</label>
		    </p>
				<p>
		      <input type="checkbox" class="filled-in" id="difficult-quality" name="difficult[]" value="The quality" />
		      <label for="difficult-quality">The quality</label>
		    </p>
				<p>
		      <input type="checkbox" class="filled-in" id="difficult-availability" name="difficult[]" value="Not available where I am" />
		      <label for="difficult-availability">Not available where I am</label>
		    </p>
			</div>

			<div class="input-block">
				<p>Do you drink fruit juice/smoothies? Your previous answer was: "<?php echo $pages["fruit_drink"]; ?>"</p>
				<p>
		      <input class="with-gap" name="drink" type="radio" id="smoothies-yes" value="Yes" />
		      <label for="smoothies-yes">Yes</label>
		    </p>
				<p>
		      <input class="with-gap" name="drink" type="radio" id="smoothies-no" value="No" />
		      <label for="smoothies-no">No</label>
		    </p>
			</div>

			<div class="input-block input-field">
        <input id="ingredients" type="text" name="ingredients">
        <label for="ingredients">What ingredients do you add in your smoothie? Your previous answer was: "<?php echo $pages["fruit_ingredients"]; ?>"</label>
      </div>

			<div class="input-block">
		 		<p>Do you agree with this statement “Eating plenty of fruits may help reduce
				the risk of many disease, including heart disease, high blood pressure, and
				some cancers”. Your previous answer was: "<?php echo $pages["fruit_agree"]; ?>"</p>
				<p>
		      <input class="with-gap" name="agree" type="radio" id="reduce-risk-yes" value="Yes" />
		      <label for="reduce-risk-yes">Yes</label>
		    </p>
				<p>
		      <input class="with-gap" name="agree" type="radio" id="reduce-risk-no" value="No" />
		      <label for="reduce-risk-no">No</label>
		    </p>
			</div>

<!-- class="btn disabled waves-effect waves-light" -->
			<button id="submit"  type="submit" name="action">Submit
		    <i class="material-icons right">send</i>
		  </button>


		</form>
	</div>
<?php
	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>
	<footer>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script type="text/javascript" src="js/interactions.js"></script>
	</footer>

</body>
</html>
