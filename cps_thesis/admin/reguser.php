<?php
mysql_connect('localhost','root','');
mysql_select_db('cpsdb');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>REGISTER A USER</title>
<a href="../login.php">Back</a>
<body>

<form action="php/action_tuition.php" method="POST">
<fieldset>
<legend>Form</legend>

Username:<br />
<input type="text" name="txtUser" value="">
<br />Password:<br />
<input type="text" name="txtPass">
<br />Confirm Password:<br />
<input type="text" name="txtConfirm">
<br />Full Name:<br />
<input type="text" name="txtFullname">
<br />Email:<br />
<input type="text" name="txtEmail">
<br /><input type="submit" name="submit" value="Submit">
</fieldset>
</form>



</body>
</head>
</html>