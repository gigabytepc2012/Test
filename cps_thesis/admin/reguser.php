<!DOCTYPE HTML>
<html>
<head>
<title>REGISTER A USER</title>
<a href="../login.php">Back</a>
<body>

<form action="../php/action_register.php" method="POST">
<fieldset>
<legend>Form</legend>

Username:<br />
<input type="text" name="txtUser" value="">
<br />Password:<br />
<input type="password" name="txtPass">
<br />Confirm Password:<br />
<input type="password" name="txtConfirm">
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