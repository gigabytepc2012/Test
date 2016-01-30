<?php
require_once 'lib/functions.php';

checkIfLoggedin();

if (isset($_POST['txtUser'])) {
	login($_POST['txtUser'], $_POST['txtPass']);
	checkIfLoggedin();
}
?>
<!DOCTYPE html>
<html>
	<head><title>Log In</title>
	</head>
	<body>
		
		<?
		if(isset($_POST['txtUser'])){
		?>
		<h4>Invalid credentials</h4>
		<?
		}
		?>
		<h3>Log In:</h3>
		<form action="login.php" method="post">
			Username:
			<br />
			<input type="text" name="txtUser"/>
			<br />
			<br />
			Password:
			<br />
			<input type="password" name="txtPass"/>
			<br />
			<br />
			<input type="submit" name="submit" value="Log In"/>
			<p>
				<a href="admin/reguser.php">Register</a>
			</p>
		</form>
	</body>
</html>