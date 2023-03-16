<?php 
	require 'connection.php';

	if(isset($_POST['submit'])){

		$email    =$_POST['email'];
		$password =$_POST['pass'];

		$query1="select * from login where Email='$email' Limit 1";

		if(mysqli_query($con,$query1)){

			$res=mysqli_query($con,$query1);

			while($raw= mysqli_fetch_assoc ($res)){

				if(sha1($password)==$raw['Password']){
					echo "<script>alert('Login success!');</script>";
				}
				else{
					echo "<script>alert('Invalied email or password!');</script>";
				}

				
				
			}
		}
		else{
			echo "<script>alert('Invalied email or password!');</script>";
		}


	}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>

	<form action="login.php" method="post">
		<h1>Login</h1>
		Email Address :<input type="email" name="email"><br>
		Password:<input type="Password" name="pass" class="password"><br>
		<button name="submit">Login</button><br>
		<a href="register.php">Register</a>
	</form>

</body>
</html>