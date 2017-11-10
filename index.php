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
				<a href="#">Home</a>
			</li>
			<li>
				<a href="#">Admin Log In</a>
			</li>
		</ul>
  </nav>

	<div class="container">
		<h1>Queens Survey</h1>

		<form method="post" action="insert.php">

			<div class="input-block input-field">
        <input id="first-name" type="text" name= "first">
        <label for="first-name">First name</label>
      </div>

			<div class="input-block input-field">
        <input id="last-name" type="text" name = "last">
        <label for="last-name">Last name</label>
      </div>

			<div class="input-block input-field">
        <input id="email" type="email" name = "email" class="validate">
        <label for="email">Email</label>
      </div>

			<div class="input-block">
				<p>Do you eat fruits everyday?</p>
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
				<p>Approximately how many fruits do you eat per day?</p>
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
				<p>What fruits do you usually eat/buy?</p>
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
			</div>

			<div class="input-block">
				<p>What do you have your fruit as?</p>
				<p>
		      <input type="checkbox" class="filled-in" id="snack"/>
		      <label for="snack">As a snack</label>
		    </p>
				<p>
		      <input type="checkbox" class="filled-in" id="breakfast"/>
		      <label for="breakfast">I have a fruit with my breakfast</label>
		    </p>
				<p>
		      <input type="checkbox" class="filled-in" id="lunch"/>
		      <label for="lunch">I have a fruit with my lunch</label>
		    </p>
				<p>
		      <input type="checkbox" class="filled-in" id="dessert"/>
		      <label for="dessert">I have a fruit as dessert</label>
		    </p>
			</div>

			<div class="input-block">
				<p>How often do you visit stores to purchase fruits in a week?</p>
				<p>
		      <input class="with-gap" name="often" type="radio" id="often-less" />
		      <label for="often-less">Less than once a week</label>
		    </p>
				<p>
		      <input class="with-gap" name="often" type="radio" id="often-once" />
		      <label for="often-once">Once a week</label>
		    </p>
				<p>
		      <input class="with-gap" name="often" type="radio" id="often-twice" />
		      <label for="often-twice">Twice a week</label>
		    </p>
				<p>
		      <input class="with-gap" name="often" type="radio" id="often-thrice" />
		      <label for="often-thrice">3 times a week</label>
		    </p>
				<p>
		      <input class="with-gap" name="often" type="radio" id="often-hella" />
		      <label for="often-hella">4 or more times a week</label>
		    </p>
			</div>

			<div class="input-block">
				<p>On average, how much do you spend on fruits per week?</p>
				<p>
		      <input class="with-gap" name="spend" type="radio" id="spend-5" />
		      <label for="spend-5">$0-5</label>
		    </p>
				<p>
		      <input class="with-gap" name="spend" type="radio" id="spend-10" />
		      <label for="spend-10">$6-10</label>
		    </p>
				<p>
		      <input class="with-gap" name="spend" type="radio" id="spend-15" />
		      <label for="spend-15">$11-15</label>
		    </p>
				<p>
		      <input class="with-gap" name="spend" type="radio" id="spend-20" />
		      <label for="spend-20">$16-20</label>
		    </p>
				<p>
		      <input class="with-gap" name="spend" type="radio" id="spend-25" />
		      <label for="spend-25">$21-25</label>
		    </p>
				<p>
		      <input class="with-gap" name="spend" type="radio" id="spend-30" />
		      <label for="spend-30">$26-30</label>
		    </p>
				<p>
		      <input class="with-gap" name="spend" type="radio" id="spend-hella" />
		      <label for="spend-hella">$30+</label>
		    </p>
			</div>

			<div class="input-block input-field">
        <input id="where" type="text">
        <label for="where">Where do you buy your fruits from?</label>
      </div>

			<div class="input-block">
				<p>Why do you purchase fruit?</p>
				<p>
		      <input type="checkbox" class="filled-in" id="fresh"/>
		      <label for="fresh">To eat fresh</label>
		    </p>
				<p>
		      <input type="checkbox" class="filled-in" id="freeze"/>
		      <label for="freeze">To freeze or later use</label>
		    </p>
				<p>
		      <input type="checkbox" class="filled-in" id="cooking"/>
		      <label for="cooking">For cooking</label>
		    </p>
				<p>
		      <input type="checkbox" class="filled-in" id="facemasks"/>
		      <label for="facemasks">To create face masks</label>
		    </p>
				<p>
		      <input type="checkbox" class="filled-in" id="health"/>
		      <label for="health">To be healthy</label>
		    </p>
			</div>

			<div class="input-block">
				<p>What’s the most important thing you consider when buying fruits?</p>
				<p>
		      <input type="checkbox" class="filled-in" id="price"/>
		      <label for="price">Price</label>
		    </p>
				<p>
		      <input type="checkbox" class="filled-in" id="brand"/>
		      <label for="brand">Brand</label>
		    </p>
				<p>
		      <input type="checkbox" class="filled-in" id="date"/>
		      <label for="date">Expiration date</label>
		    </p>
				<p>
		      <input type="checkbox" class="filled-in" id="nutrient"/>
		      <label for="nutrient">Nutrient needs</label>
		    </p>
				<p>
		      <input type="checkbox" class="filled-in" id="condition"/>
		      <label for="condition">Condition of fruit</label>
		    </p>
				<p>
		      <input type="checkbox" class="filled-in" id="like"/>
		      <label for="like">I like the fruit</label>
		    </p>
			</div>

			<div class="input-block">
				<p>Please select the things that make it difficult for you to buy fruits:</p>
				<p>
		      <input type="checkbox" class="filled-in" id="difficult-condition"/>
		      <label for="difficult-condition">Condition of fruit</label>
		    </p>
				<p>
		      <input type="checkbox" class="filled-in" id="difficult-price"/>
		      <label for="difficult-price">Price</label>
		    </p>
				<p>
		      <input type="checkbox" class="filled-in" id="difficult-where"/>
		      <label for="difficult-where">Not sure where to buy fruits</label>
		    </p>
				<p>
		      <input type="checkbox" class="filled-in" id="difficult-quality"/>
		      <label for="difficult-quality">The quality</label>
		    </p>
				<p>
		      <input type="checkbox" class="filled-in" id="difficult-availability"/>
		      <label for="difficult-availability">Not available where I am</label>
		    </p>
			</div>

			<div class="input-block">
				<p>Do you drink fruit juice/smoothies?</p>
				<p>
		      <input class="with-gap" name="smoothies" type="radio" id="smoothies-yes" />
		      <label for="smoothies-yes">Yes</label>
		    </p>
				<p>
		      <input class="with-gap" name="smoothies" type="radio" id="smoothies-no" />
		      <label for="smoothies-no">No</label>
		    </p>
			</div>

			<div class="input-block input-field">
        <input id="ingredients" type="text">
        <label for="ingredients">What ingredients do you add in your smoothie?</label>
      </div>

			<div class="input-block">
		 		<p>Do you agree with this statement “Eating plenty of fruits may help reduce
				the risk of many disease, including heart disease, high blood pressure, and
				some cancers”</p>
				<p>
		      <input class="with-gap" name="reduce-risk" type="radio" id="reduce-risk-yes" />
		      <label for="reduce-risk-yes">Yes</label>
		    </p>
				<p>
		      <input class="with-gap" name="reduce-risk" type="radio" id="reduce-risk-no" />
		      <label for="reduce-risk-no">No</label>
		    </p>
			</div>

			<button class="btn waves-effect waves-light" type="submit" name="action">Submit
		    <i class="material-icons right">send</i>
		  </button>

		</form>
	</div>

	<footer>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
	</footer>

</body>
</html>
