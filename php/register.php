<?php
	
	require 'connection.php';
	if(isset($_POST['button'])){
		$email = $_POST['email'];
		$pass  = $_POST['password'];
		$confirm=$_POST['confirm'];

		$encrypted_pass=sha1($pass);

		if($pass==$confirm){

			$query1="insert into login(Email,Password) values('$email','$encrypted_pass')";

			
			if(mysqli_query($con,$query1)){
				echo "<script>alert('Registration success!');</script>";
			}
			else{
				echo "<script>alert('Registration Fail !');</script>";
			}
		}
		else{
			echo "<script>alert('password dosn\'t match!');</script>";
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

	<form action="register.php" method="post">
		<h1>Register</h1>
		Email Address :<input type="email" name="email"><br>
		Password:<input type="Password" name="password" class="password"><br>
		Confirm:<input type="Password" name="confirm" class="password2"><br>
		<button name="button">Register</button><br>
		<a href="login.php">Login</a>
	</form>


</body>
</html>