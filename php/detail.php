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


	$id = $_SESSION['productID'];
	$result1 = mysqli_query($GLOBALS['dbhandle'],"SELECT * FROM product WHERE ID=$id");

	$data = array();
	while ($row = mysqli_fetch_array($GLOBALS['result1'])){ 
	    $data[] = array_map('utf8_encode', $row);
	}
	echo json_encode($data);
?>