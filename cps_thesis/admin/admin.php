<?php
session_start();
if(!$_SESSION['logged'] && $_SESSION['group'] != 1){
	// Send them back to the login page if they are not admin and not logged in
	header("location:login.php");
	exit;
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>ADMINISTRATION</title>
<a href="reguser.php">Register User</a>
|<a href="../login.php">Out</a>
<body>

<form action="php/action_tuition.php" method="POST">
<br />Create Tuition Values:
<br />School Year:<input type="text" name="txtSY" value="">
<br />Entrance Fee:<input type="text" name="txtEntrance">
<br />Tuition Fee:<input type="text" name="txtTuition">
<br />Misc. Fee:<input type="text" name="txtMisc">
<br /><input type="submit" name="submit" value="Submit">
</form>
<br />Show Tuition:



</body>
</head>
</html>