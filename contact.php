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
	<!-- Contact Content -->
	<main>
		<figure>
			<img id="homeimg" alt="homeimg" src="images/pexels-photo-821026.jpeg">
		</figure>
		<br>

		<h2>Contact us today!</h2>
		<p>If you have any questions regarding our events, volunteering or rules,  please use the contact form below and we will answer your questions as best we can.</p>

		<!--Contact Form -->
		<div class="container">
			<h6>Contact Us</h6>
			<form action="thankyou.php" method="POST">

				<br> Athlete/Volunteer:
				<select name="user_type">
	  <option value="Athlete">Athlete</option>
	  <option value="Volunteer">Volunteer</option>
  </select>

				<br>

				<label for="name">Name:</label>
				<input type="text" name="user_name" id="name" required><br>

				<label for="email">Email:</label>
				<input type="email" name="user_email" id="email" required><br>

				<label for="phone">Phone:</label>
				<input type="text" name="user_phone" id="phone" required><br>

				<label for="message">Message:</label>
				<textarea id="message" type="text" name="message" required></textarea><br>
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