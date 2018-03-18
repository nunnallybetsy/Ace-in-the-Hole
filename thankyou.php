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
<main>
	
<div class="thankyou">
<?php
 
require 'connection.php';
$conn    = Connect();
$user_type    = $conn->real_escape_string($_POST['user_type']);
$user_name    = $conn->real_escape_string($_POST['user_name']);
$user_email    = $conn->real_escape_string($_POST['user_email']);
$user_phone   = $conn->real_escape_string($_POST['user_phone']);
$message = $conn->real_escape_string($_POST['message']);
$query   = "INSERT into ace_cform (user_type,user_name,user_email,user_phone,message) VALUES('" . $user_type . "','" . $user_name . "','" . $user_email . "','" . $user_phone . "','" . $message . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
 
echo "<p>Thank You For Contacting Us <br></p>";
 
$conn->close();
 
?>
</div>

</main>

	<footer>
		<?php include ('footer.php');?>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="hamburger.js"></script>

</body>

</html>



