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
		session_start();
		if(isset($_SESSION["username"]))
		{
			$username=$_SESSION["username"];
		}
		else{ echo "<div class='alert alert-danger' role='alert'>Something went wrong try login again.</div>";

		}
	?>


	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Bienvenue <?php echo $username;?></h1>
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
					<a href="courses.php">
					<i class="fa fa-book fa-2x"></i>
						<div class="text">
							<h3>Cours</h3>
							
						</div>
					</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
					<a href="que.php">
					<i class="fa fa-info fa-2x"></i>
						<div class="text">
							<h3>Posez une question à un professeur</h3>
						</div>
					</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
					<a href="manage.php">
						<i class="fa fa-user fa-2x"></i>
						<div class="text">
							<h3>Mise à jour du profil</h3>
						</div>
					</a>
					</div>
				</div>
			</div>
		</section>
	</div>
	<?php
		include "footer.php";
	?>
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="../assets/js/custom.js"></script>
</body>
</html>