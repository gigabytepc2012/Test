<?php
mysql_connect('localhost','root','');
mysql_select_db('cpsdb');
?>

<!DOCTYPE HTML>

<html>
<head>
<title>Dolores CPS Home</title>
<a href="homepage.php">Home</a>
|<a href="studentreg.php">Register Student</a>
|<a href="list.php">Students List</a>
|<a href="signout.php">Sign Out</a>
</head>
<body>
<p>Default User</p>

Search Students: 
<input type="text" name="search" value="">
<input type="submit" name="btnSubmit" value="Search">
<fieldset>
<legend>Student Info:</legend>
<table width="150px">
<tr><td>Fullname</td></tr><tr><td>SY:</tr></td>
</table>
</fieldset>

<fieldset>
<legend>Student Balance</legend>
Tuition:<br/>

Discount:<br/>
</fieldset>
<br />








</body>
</html>