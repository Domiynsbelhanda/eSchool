<html>
<head>
<?php include "head.php";?>
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
                    <h1>Connexion en tant que professeur</h1>
                </div>
            </div>
        </div>
    </header>
	<br>
	<form action="" method="POST">
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
		</table>
	</form>
	<?php
	if(!empty($_POST['id'])&&!empty($_POST['pass']))
	{
		if(isset($_POST['btnsubmit']))
		{
			$name = $_POST["id"]; 
            $password = $_POST["pass"]; 
			$query = "SELECT * FROM expert_info WHERE UserName='$name' and Password='$password'";
			$result = mysqli_query($strconn,$query);
			$count = mysqli_num_rows($result);
			if($count==1)
			{
				session_start();
				$_SESSION["username"]=$_POST['id'];
				//header("location:user/index.php");
				echo("<script>location.href = 'expert/index.php';</script>");
			}
			else
			{
				echo "<div class='alert alert-danger' role='alert'>Invalid username or password</div>";

			}
		}
	}?>
	<?php
		include "footer.php";
	?>
</body>
</html>