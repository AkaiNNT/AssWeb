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


	$result1 = mysqli_query($GLOBALS['dbhandle'],"SELECT product.ID,product.Name,product.Price,product.Type,cart.Number FROM product,cart WHERE cart.UserID = $uid AND cart.ProductID=product.ID");
	
	$data = array();
	while ($row = mysqli_fetch_array($GLOBALS['result1'])){ 
	    $data[] = array_map('utf8_encode', $row);
	}
	
	echo json_encode($data);
?>