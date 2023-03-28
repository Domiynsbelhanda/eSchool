<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		include "head.php";
	?>
	
</head>
<body>
	<?php
		include "nav.php";
		/*if(isset($_SESSION["username"]))
		{
			//$username=$_SESSION["username"];
		}
		else{ echo 'session not started';}*/

	?>

	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="banner-content">
				<div id="da-slider" class="da-slider">
					<div class="da-slide">
						<h2>Education en ligne</h2>
						<p>Contenu adaptée à votre rythme.</p>
						<div class="da-img"></div>
					</div>
					<div class="da-slide">
						<h2>Cours en informatique</h2>
						<p>Programmation - Design - Reseau et Télécommunication</p>
						<div class="da-img"></div>
					</div>
					<div class="da-slide">
						<h2>Apprentissage 100% en ligne</h2>
						<p>Aprennez de partout dans le monde grâce à votre mobile.</p>
						<div class="da-img"></div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- /Header -->

	<div id="courses">
		<div class="container">
			<h2>Cours populaires</h2>
			<div class="row">
				<div class="col-md-4">
					<div class="featured-box">
					<a href="login.php">
						<div class="text">
							<h3>HTML</h3>
							This FREE Tutorial will teach you how to design a webpage using HTML.Complete a series of hands-on practice and examination while writing real HTML code.
						</div>
					</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
					<a href="login.php">
						<div class="text">
							<h3>CSS</h3>
							Our CSS Tutorial will teach you how to control the style & layout of websites.Complete a series of practice and examination while filling out actual CSS code.
						</div>
					</a>
					</div>
				</div>

		</div>
	</div>
	<?php
		include "footer.php";
	?>
<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="assets/js/modernizr-latest.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.cslider.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>
