<?php
	session_start();
	$username = "root";
	$password = "";
	$hostname = "localhost"; 

	//connection to the database
	$dbhandle = mysqli_connect($hostname, $username, $password) or die("Unable to connect to MySQL");
	//select a database to work with
	$selected = mysqli_select_db($dbhandle, "shopbanhang") or die("Could not select shopbanhang");
	mysqli_query($GLOBALS['dbhandle'],'set names utf8');

	$total = $_POST['total'];

	mysqli_query($GLOBALS['dbhandle'],"INSERT INTO bill VALUES(NULL,$total,NULL)");

	$result2 = mysqli_query($GLOBALS['dbhandle'],"SELECT * FROM bill ORDER BY ID DESC LIMIT 1");
	$row = mysqli_fetch_array($GLOBALS['result2']);
	echo $row{'ID'};
	mysqli_close($dbhandle);
?>