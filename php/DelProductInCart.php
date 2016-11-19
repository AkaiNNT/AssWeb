<?php
	session_start();
	$username = "root";
	$password = "";
	$hostname = "localhost"; 

	//connection to the database
	$dbhandle = mysqli_connect($hostname, $username, $password) or die("Unable to connect to MySQL");
	//select a database to work with
	$selected = mysqli_select_db($dbhandle, "shopbanhang") or die("Could not select shopbanhang");
	mysql_query("SET NAMES utf8");

	$uid = $_SESSION['userId'];
	$pid = $_POST['id'];

	$result1 = mysqli_query($GLOBALS['dbhandle'],"DELETE FROM cart WHERE UserID = $uid AND ProductID = $pid");
	
?>