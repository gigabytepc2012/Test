<?php

session_start();

function db_connect() {
	$con = mysql_connect("localhost", "root", "");
	if (!$con) {
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("cpsdb", $con);
	return $con;
}

function register($username, $password, $full_name, $email) {
	$con = db_connect();
	$sql = "INSERT INTO tbl_user (username, password, name, email) VALUES
		('$username','$password','$full_name','$email')";

	$result = mysql_query($sql, $con);
	mysql_close($con);
	return $result;
}

function login($username, $password) {
	$con = db_connect();
	$sql = "SELECT * FROM tbl_user WHERE username='$username' AND password = '$password'";
	$result = mysql_query($sql, $con);
	while ($row = mysql_fetch_object($result)) {
		$_SESSION['username'] = $row -> username;
		$_SESSION['name'] = $row -> name;
	}
	mysql_close($con);
}

function logout() {
	session_unset();
	session_destroy();
	header("Location: index.php");
}

function checkIfLoggedin() {
	$current_page = $_SERVER['PHP_SELF'];
	// if already logged in then redirect to homepage
	if ($current_page == '/login.php' && isset($_SESSION['username'])) {
		header("Location: homepage.php");
	} else if ($current_page != '/login.php' && !isset($_SESSION['username'])) {
		header("Location: login.php");
	}
}
?>