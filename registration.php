<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, height=device-height, initial-scale=1" name="viewport">
	<title>Ace in the Hole Multisport Events</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans%7CRaleway" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="css/reset.css" rel="stylesheet" type="text/css">
	<link href="css/helper.css" rel="stylesheet" type="text/css">
	<link href="css/grid.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	
	<header>
		<?php include ('header.php');?>
	</header>
	
<!--Registration Content -->
	
	<main>
		<figure>
			<img id="regimg" alt="regimg" src="images/cyclists-601591_1920.jpg">
		</figure>
		<h2>Cost</h2>
		<div class="row">
			<div class="column">
				<p>Long Course<br>$240</p>
				<p>Olympic<br>$110</p>
				<p>10K<br>$50</p>
			</div>
			<div class="column">
				<p>Half Marathon<br>$74</p>
				<p>Sprint<br>$90</p>
				<p>Try-a-Tri<br>$65</p>
			</div>
			<div class="column">
				<p>Splash n Dash<br>$25</p>
			</div>
		</div>


		<h3>Cost Includes</h3>
		<ul id="cost">
			<li>Food &amp; Beer</li>
			<li>Access to the weekend’s live entertainment & Fitness Expo</li>
			<li>Commemorative Finisher medal</li>
			<li>Accurate Chip Timing for competitive races</li>
			<li>Ace in the Hole MultiSport Weekend Tech Shirt</li>
			<li>Post-event party & entertainment</li>
		</ul>
		<p>NOTE: Tech shirts guarenteed to pre-registered participants only.</p>

		<h3>Packet Pick Up</h3>
		<p>All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR. Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick up. </p>


		<p><span>Register Here!</span> - Keep in mind you may only register for one event per day.</p>
		<div class="container">
		<h6>Registration</h6>
			
		<!--Registration form -->
			
		<form action="thankyoureg.php" method="POST">

			<br>Saturday Event:
	    	<select name="event_saturday">
	  			<option disabled selected value> -- select an event -- </option>
	  			<option value="Not Participating">Not Participating</option>
	  			<option value="Long Course">Long Course Triathlon</option>
	  			<option value="Olympic">Olympic Triathlon</option>
	  			<option value="10k">10K</option>
	  			<option value="Half Marathon">Half Marathon</option>
  			</select>


			<br>Sunday Event:
			<select name="event_sunday">
				<option disabled selected value> -- select an event -- </option>
				<option value="Not Participating">Not Participating</option>
	  			<option value="Sprint Triathlon">Sprint Triathlon</option>
	  			<option value="Tri-A-Tri">Tri-A-Tri</option>
	  			<option value="Splash n Dash">Splash n Dash</option>
  			</select>
				<br>

				<label for="name">Name:</label>
				<input type="text" name="user_name" id="name" required><br>

				<br> Gender:
				<select name="user_gender">
					<option disabled selected value> -- select a gender -- </option>
					<option value="Female">Female</option>
	  				<option value="Male">Male</option>
	  				<option value="Non-Binary">Non-Binary</option>
				</select>

				<label for="email">Email:</label>
				<input type="email" name="user_email" id="email" required><br>

				<label for="phone">Phone:</label>
				<input type="text" name="user_phone" id="phone" required><br>

				<label for="econtact">Emergency Contact:</label>
				<input type="text" name="user_econtact" id="econtact" required><br>

				<label for="ephone">Emergency Contact Phone:</label>
				<input type="text" name="econtact_phone" id="ephone" required><br><br>
				<input type="submit" value="Submit"><br>
			</form>
		</div>

	</main>

	<footer>
		<?php include ('footer.php');?>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="hamburger.js"></script>

</body>

</html>