
<html>
<head>
<title>Success</title>
<h1><a href="../admin.php">ADMIN TEST<a/></h1>
<body>
 <!-- insert for studentreg.php-->
 
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("cpsdb", $con);
 
$sql="INSERT INTO tbl_tuition (sy, entrance,tuition,misc)
VALUES
('$_POST[txtSY]','$_POST[txtEntrance]','$_POST[txtTuition]','$_POST[txtMisc]')";
 
if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
 
mysql_close($con)
?>
</head>
</body>
</html>