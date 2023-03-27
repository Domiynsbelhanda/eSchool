<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		include "head.php";
	?>
</head>

<body>
	<?php
		include "nav.php";$strconn=mysqli_connect("localhost","root","","project");
	if(!$strconn)
		echo "Connection failed".mysqli_connect_error();
	else
	{
	
	}
	?>


	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Contact</h1>
				</div>
			</div>
		</div>
	</header>

	<!-- container -->
	<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h3 class="section-title">Votre message</h3>
			<form name="sentMessage" id="contactForm"  novalidate method="post" action=""> 
					<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control" 
					placeholder="Nom complet" name="name" required
					data-validation-required-message="Veuillez entrer votre nom complet" />
					<p class="help-block"></p>
					</div>
					</div> 	
					<div class="control-group">
					<div class="controls">
					<input type="email" class="form-control" placeholder="Email" 
					name="email" required
					data-validation-required-message="Veuillez entrer votre email" />
					</div>
					</div> 	
					<div class="control-group">
					<div class="controls">
					<textarea rows="10" cols="100" class="form-control" 
					placeholder="Message" name="message" required
					data-validation-required-message="Veuillez entrer votre message" minlength="5" 
					data-validation-minlength-message="Min 5 characters" 
					maxlength="999" style="resize:none;margin-top:10px"></textarea>
					</div>
					</div> 	
					<br>
					<div id="success"> 
				<?php
				if(isset($_POST['btnsubmit']))
				{
					$name=$_POST['name'];
					$email=$_POST['email'];
					$message=$_POST['message'];
					// $strInsert="INSERT INTO feedback(Description,name,email) VALUES('$message','$name','$email')";
					$strInsert = "insert into feedback values('$message','$name','$email')";
					if(mysqli_query($strconn,$strInsert))
						echo "<div class='alert alert-success' role='alert'>Merci de nous avoir contacté.</div>";
					else
							echo "<div class='alert alert-danger' role='alert'>Erreur dans l'envoie.</div>";

				}
				?>
				</div> <!-- For success/fail messages -->
					<button type="submit" class="btn btn-primary pull-right" name="btnsubmit" >Envoyé</button><br /><br /><br /><br />
			</form>
			</div>
			</div>
	</div>

	<?php
		include "footer.php";
	?>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
 <script src="contact/jqBootstrapValidation.js"></script>
 <script src="contact/contact_me.js"></script>
	<script src="assets/js/custom.js"></script>

	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script src="assets/js/google-map.js"></script>


</body>
</html>
