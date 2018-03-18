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
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s);
			js.id = id;
			js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	
	<!-- Header includes -->
	
	<header>
		<?php include ('header.php');?>
	</header>

	<main>
		<figure>
			<img id="homeimg" alt="homeimg" src="images/marathon-2965004_1920.jpg">
		</figure>

		<h2>2018 Event: March 24th &amp; 25th</h2>
		
		<!-- Contact and Registration info and buttons -->
		
				<div class="section group">
        <div class="col span_6_of_12">
		<h3>Ready to register?</h3>
		<p>Visit our registration page to find out details regarding the cost of the event and to register!</p>
		<form class="detailbtn">
			<input class="myButton" type="button" value="Register Today!" onclick="window.location.href='registration.php'" />
		</form></div>
		<div class="col span_6_of_12">
		<h3>Need more information?</h3>
		<p>Visit our contact page, send us a message and we will reach out to you as soon as we can!</p>
		<form class="detailbtn">
			<input class="myButton" type="button" value="Contact Us Today!" onclick="window.location.href='contact.php'" />
		</form>
		</div>
		</div>
		
		<!-- Home Page Content -->
		<h3>About Ace in the Hole Multisport Events </h3>

		<p>Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, sexual orientations and cultural backgrounds. We offer Events for Every Body.
		</p>


		<h3>About the event</h3>
		
		<p>The Annual Ace in the Hole MultiSport Weekend is a legendary event in the Oregon triathlon and running community. It has become a traditional destination race for athletes from across the nation. There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!
		</p>


		<!-- Slideshow container -->
		<div class="slideshow">

			<!-- Full-width images with number and caption text -->
			<div class="mySlides fade">
				<div class="numbertext">1 / 7</div>
				<img src="images/competition-609872_1920.jpg" alt="slide1" style="width:100%">
			</div>

			<div class="mySlides fade">
				<div class="numbertext">2 / 7</div>
				<img src="images/cycling-1814362_1920.jpg" alt="slide2" style="width:100%">
			</div>

			<div class="mySlides fade">
				<div class="numbertext">3 / 7</div>
				<img src="images/life-864383_1920.jpg" alt="slide3" style="width:100%">
			</div>

			<div class="mySlides fade">
				<div class="numbertext">4 / 7</div>
				<img src="images/marathon-2366475_1920.jpg"  alt="slide4" style="width:100%">
			</div>

			<div class="mySlides fade">
				<div class="numbertext">5 / 7</div>
				<img src="images/triathlon-2175845_1920.jpg" alt="slide5" style="width:100%">
			</div>

			<div class="mySlides fade">
				<div class="numbertext">6 / 7</div>
				<img src="images/running-942110_1920.jpg" alt="slide6" style="width:100%">
			</div>

			<div class="mySlides fade">
				<div class="numbertext">7 / 7</div>
				<img src="images/competition-609849_1920.jpg" alt="slide7" style="width:100%">
			</div>

			<!-- Next and previous buttons -->
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>
		<br>

		<!-- The dots/circles -->
		<div style="text-align:center">
			<span class="dot" onclick="currentSlide(1)"></span>
			<span class="dot" onclick="currentSlide(2)"></span>
			<span class="dot" onclick="currentSlide(3)"></span>
			<span class="dot" onclick="currentSlide(4)"></span>
			<span class="dot" onclick="currentSlide(5)"></span>
			<span class="dot" onclick="currentSlide(6)"></span>
			<span class="dot" onclick="currentSlide(7)"></span>
		</div>

		<!-- Social Media Feeds -->
		
		<h3>Connect with us:</h3>
		
		<div class="social">
		<div class="col span_6_of_12">
			<h5>Like Us on Facebook!</h5>
				<div class="fb-page" data-href="https://www.facebook.com/pg/cas222cascade" data-tabs="timeline" data-small-header="false" data-width="300" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
					<blockquote cite="https://www.facebook.com/pg/cas222cascade" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/pg/cas222cascade">CAS 222</a></blockquote>
				</div>
			</div>
		<div class="col span_6_of_12">
			<h5>Follow Us on Twitter!</h5>
					<a class="twitter-timeline" href="https://twitter.com/pcccas222?ref_src=twsrc%5Etfw" data-width="300" data-height="500">Tweets by pcccas222</a>
					<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
	
		    </div>
		</div>
	</main>
	<!-- Footer Inludes -->
	<footer>
		<?php include ('footer.php');?>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="hamburger.js"></script>
	<script src="slide.js"></script>

</body>

</html>