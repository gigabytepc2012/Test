<?php
require_once '../lib/functions.php';
?>
<html>
	<head>
		<title>Success</title>
		<h1><a href="../admin.php">ADMIN TEST<a/></h1>
		<body>
			<!-- insert for studentreg.php-->
			<?
			$result = register($_POST["txtUser"], $_POST["txtPass"], $_POST["txtFullname"], $_POST["txtEmail"]);
			if($result){
			?>
			<h3>Success!</h3>
			<?
			}
			?>
			<a href="/login.php">Click here to login</a>
	</head>
	</body>
</html>