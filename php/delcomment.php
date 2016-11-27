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

	$cid = $_POST['cid'];
	$uid = $_SESSION['userId'];

	$result = mysqli_query($GLOBALS['dbhandle'],"SELECT * FROM comment WHERE ID = $cid");
	$row = mysqli_fetch_array($GLOBALS['result']);
	if($uid == $row{'UserID'}){
		echo 1;
		mysqli_query($GLOBALS['dbhandle'],"DELETE FROM comment WHERE ID = $cid");
	}
	else echo 2;

?>