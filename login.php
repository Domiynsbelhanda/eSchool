<html>
<head>
	<?php
		include "head.php";
	?>
<style>
th, td {
    padding:5px;   
}
</style>
</head>
<body>
	<?php
		include "nav.php";
		$strconn=mysqli_connect("localhost","root","","project");
		if(!$strconn)
			echo "Connection failed".mysqli_connect_error();
		else{}
	?>
	<header id="head" class="secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1>Connexion</h1>
                </div>
            </div>
        </div>
    </header>
	<br>
	<form action="" method="post">
		<table border=0 align="center">
			<tr>
				<td><label>Entrer votre nom d'utilisateur:</label></td>
				<td><input type="text" class="form-control" name="id" placeholder="Nom d'utilisateur"></td>
			</tr>
			<tr>
				<td><label>Entrer votre mot de passe:</label></td>
				<td><input type="password" class="form-control" name="pass" placeholder="Mot de passe"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><button name="btnsubmit" class="btn btn-block">Soumettre</button></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><button name="btnforget" class="btn btn-block">Mot de passe oublié?</button></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><a href="reg.php" class="btn btn-block">Créer un compte?</a></td>
			</tr>
			
			<tr>
				<td colspan="2" align="center"><a href="expertlogin.php" class="btn btn-block">Connexion en tant que professeur</a></td>
			</tr>
		</table>
	</form>
	
	<?php
	if(!empty($_POST['id'])&&!empty($_POST['pass']))
	{
		if(isset($_POST['btnsubmit']))
		{
			$name = $_POST["id"]; 
            $password = $_POST["pass"]; 
			$query = "SELECT * FROM user_info WHERE UserName='$name' and Password='$password'";
			$result = mysqli_query($strconn,$query);
			$count = mysqli_num_rows($result);
			if($count==1)
			{
				session_start();
				//session_id("my_session");
				$_SESSION["username"]=$_POST['id'];
				//header("location:user/index.php");
				echo("<script>location.href = 'user/index.php';</script>");
			}
			else
			{
				echo "<div class='alert alert-danger' role='alert'>Username or password is incorrect..Try again</div>";
			}
		}
	}?>
	<?php
	/*if(!empty($_POST['id']))
	{
		if(isset($_POST['btnforget']))
		{
			$username = $_POST['id'];
			$query1 = "SELECT * FROM user_info WHERE UserName='$username'";
			$result1 = mysqli_query($strconn,$query1);
			$count = mysqli_num_rows($result1);
			/*if($count==1)
			{
				echo 'hello';
				//echo("<script>location.href ='forget.php';</script>");
			}
			else
			{
				echo 'failed';
			}
			while($row = mysqli_fetch_array($result1))
			{
				$email = $row[0];
				$pass = $row[1];
			}
		}
		$message = "Use This Password To Login in :".$pass;
		$subject = "Your Recovered Password";
		$headers = "From : parthvarde50@gmail.com";
		if($email)
		{
			echo "<div class='alert alert-success' role='alert'>Password successfully sent to your registered Email ID</div>";
		}
		else
		{
			echo "<div class='alert alert-danger' role='alert'>Some error occurred. Please try again later!</div>";
		}
	}
	*/
	?>
	<?php
		include "footer.php";
	?>
</body>
</html>