<html>
<head>
	<meta charset="utf-8">
	<title>eLearning - Free Educational Responsive Web Template </title>
	<link rel="favicon" href="../assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="../assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="../assets/css/da-slider.css" />
	<link rel="stylesheet" href="../assets/css/style.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
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
		else{ echo 'session not started';}
	?>
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Admin</h1>
				</div>
			</div>
		</div>
	</header>
	<br>
	<div id="courses">
		<section class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="featured-box">
						<a href="expert.php">
						<i class="fa fa-cogs fa-2x"></i>
						<div class="text">
							<h3>Add Expert</h3>
							
						</div>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
						<a href="suggestion.php">
						<i class="fa fa-cogs fa-2x"></i>
						<div class="text">
							<h3>Suggestions</h3>
							
						</div>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
						<a href="subject.php">
						<i class="fa fa-cogs fa-2x"></i>
						<div class="text">
							<h3>Add Subject</h3>
							
						</div>
						</a>
					</div>
				</div>
		</section>
	</div>
	</div>
	<div id="courses">
		<section class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="featured-box">
						<a href="chapter.php">
						<i class="fa fa-cogs fa-2x"></i>
						<div class="text">
							<h3>Add Chapter</h3>
							
						</div>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
						<a href="manageuser.php">
						<i class="fa fa-cogs fa-2x"></i>
						<div class="text">
							<h3>Manage Users</h3>
							
						</div>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
						<a href="manageexpert.php">
						<i class="fa fa-cogs fa-2x"></i>
						<div class="text">
							<h3>Manage Expert</h3>
							
						</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div id="courses">
		<section class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="featured-box">
						<a href="order.php">
						<i class="fa fa-cogs fa-2x"></i>
						<div class="text">
							<h3>Orders</h3>
							
						</div>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
						<a href="addadmin.php">
						<i class="fa fa-cogs fa-2x"></i>
						<div class="text">
							<h3>Add Admin</h3>
							
						</div>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
						<a href="feedback.php">
						<i class="fa fa-cogs fa-2x"></i>
						<div class="text">
							<h3>Feedback</h3>
							
						</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		
	<?php
		include "footer.php";
	?>
</body>
</html>