
<html>
<head>
<title>Success</title>
<h3><a href="../studentreg.php">Student Registration<a/></h3>
<body>
 <!-- insert for studentreg.php-->
 
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("cpsdb", $con);
 
$sql="INSERT INTO tbl_studreg (fname, mname,lname,gender,bday)
VALUES
('$_POST[txtFname]','$_POST[txtMname]','$_POST[txtLname]','$_POST[txtGender]','$_POST[txtBday]')";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
 
mysql_close($con)
?>
</head>
</body>
</html>