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


	$result1 = mysqli_query($GLOBALS['dbhandle'],"SELECT ID,Name,Price,Type FROM product ORDER BY RAND() LIMIT 4");
	
	$data = array();
	while ($row = mysqli_fetch_array($GLOBALS['result1'])){ 
	    $data[] = $row;
	}
	
	echo json_encode($data);
?>