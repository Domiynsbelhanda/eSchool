<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "head.php";?>
</head>

<body>
	<?php
		include "nav.php";
		$strconn=mysqli_connect("localhost","root","","project");
		if(!$strconn)
			echo "Connection failed".mysqli_connect_error();
		else{}
	?>
	<?php
		$query = "SELECT * FROM subject LIMIT 1";
		$result = mysqli_query($strconn,$query);
		/*if($result)
		{
			echo "Sucess";
		}
		else{
			echo "failed";
		}*/
	?>
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Cours</h1>
				</div>
			</div>
		</div>
	</header>
	<div id="courses">
		<section class="container">
			<h2>Cours disponibles</h2>
			<div class="row">
				<div class="col-md-4">
					<div class="featured-box">
					<a href="HTML.php">
						<i class="fa fa-html5 fa-2x"></i>
						<div class="text">
							<h3>HTML</h3>
							This FREE Tutorial will teach you how to design a webpage using HTML.Complete a series of hands-on practice and examination while writing real HTML code.
						</div>
					</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
					<a href="CSS.php">
						<i class="fa fa-css3 fa-2x"></i>
						<div class="text">
							<h3>CSS</h3>
							Our CSS Tutorial will teach you how to control the style & layout of websites.Complete a series of practice and examination while filling out actual CSS code.
						</div>
					</a>
					</div>
				</div>
				<?php
				while($row = mysqli_fetch_array($result))
				{
					echo '<div class="col-md-4">';
					echo '<div class="featured-box">';
					echo '<a href="new.php">';
					echo '<i class="fa fa-leaf fa-2x"></i>';
					echo '<div class="text">';
					echo '<h3>'.$row[0].'</h3>';
					echo $row[1];
					echo '</div>';
					echo '</a>';
					echo '</div>';
					echo '</div>';
				}
				?>
			</div>
		</section>
	</div>
	<?php
		include "footer.php";
	?>
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>
