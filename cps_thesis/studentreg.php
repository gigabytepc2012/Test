<?php
mysql_connect('localhost','root','');
mysql_select_db('cpsdb');
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Registration</title>
<h3><a href="homepage.php">Return to homepage.php</a></h3>
<body>
<form action="php/insert.php" method="POST">

<p>Fill Values<br />

<p>First Name:<br />
<input type="text" name="txtFname"><br />

<p>Middle Name<br />
<input type="text" name="txtMname"><br />

<p>Last Name:<br />
<input type="text"name="txtLname"><br />

<p>Gender:<br />
<input type="text"name="txtGender"><br />

<p>Date of Birth:<br />
<input type="text"name="txtBday"><br />

<br />
<input type="submit" name="submit" value="Submit">

</form>
<!--Refresh submits duplicate values-->
</body>
</head>
</html>
