<?php
	$username = "root";
	$password = "";
	$hostname = "localhost"; 

	//connection to the database
	$dbhandle = mysqli_connect($hostname, $username, $password) or die("Unable to connect to MySQL");
	//select a database to work with
	$selected = mysqli_select_db($dbhandle, "shopbanhang") or die("Could not select shopbanhang");
	mysql_query("SET NAMES utf8");

	$result1 = mysqli_query($GLOBALS['dbhandle'],"SELECT ID,Name,Price,Class,PostDay FROM product WHERE Type='loa'");
	$result2 = mysqli_query($GLOBALS['dbhandle'],"SELECT ID,Name,Price,Class,PostDay FROM product WHERE Type='mp3'");

	$data = array();
	while ($row = mysqli_fetch_array($GLOBALS['result1'])){ 
	    $data["loa"][] = array_map('utf8_encode', $row);
	}
	while ($row = mysqli_fetch_array($GLOBALS['result2'])){ 
	    $data["mp3"][] = array_map('utf8_encode', $row);
	}
	echo json_encode($data);
?>