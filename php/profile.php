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

	$uid = $_SESSION['userId'];

	$result1 = mysqli_query($GLOBALS['dbhandle'],"SELECT * FROM user WHERE ID = $uid");
	$result2 = mysqli_query($GLOBALS['dbhandle'],"SELECT * FROM bill WHERE bill.UserID = $uid");
	$data = array();
	while ($row = mysqli_fetch_array($GLOBALS['result1'])){ 
	    $data['user'][] =  $row;
	}
	while ($row = mysqli_fetch_array($GLOBALS['result2'])){ 
	    $data['bill'][] =  $row;
	}
	echo json_encode($data);
	mysqli_close($dbhandle);
?>