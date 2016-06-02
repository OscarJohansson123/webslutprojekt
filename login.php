<?php
	session_start();
	if(isset($_SESSION['loggedin'])){
		header('Location: index.php');
	}
?>

<!DOCTYPE html>
<html>

	<head>	
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	
	<body>
		<div class="login">
			<form action="verification.php" method="POST">
				<input id="login_mail" type="text" name="mail" placeholder="Mail" required><br>
				<input id="login_pass" type="password" name="password" placeholder="Password" required><br>
				<input id="login_button" type="submit" value="Log in">
			</form>
		</div>	
	</body>
</html>		