<?php
	session_start();
	$username = "root";
	$password = "";
	$hostname = "localhost"; 

	//connection to the database
	$dbhandle = mysqli_connect($hostname, $username, $password) or die("Unable to connect to MySQL");
	//select a database to work with
	$selected = mysqli_select_db($dbhandle, "shopbanhang") or die("Could not select shopbanhang");
	//mysql_query("SET NAMES utf8");
	// $dbhandle->set_charset("utf-8");
	mysqli_query($GLOBALS['dbhandle'],'set names utf8');

	$id = $_SESSION['productID'];

	$result1 = mysqli_query($GLOBALS['dbhandle'],"SELECT * FROM product WHERE ID=$id");
	$result2 = mysqli_query($GLOBALS['dbhandle'],"SELECT comment.ID,comment.Content,comment.Time,user.Username FROM comment,user WHERE comment.ProductID = $id AND user.ID = comment.UserID ORDER BY Time DESC");
	
	$data = array();
	while ($row = mysqli_fetch_array($GLOBALS['result1'])){ 
	    $data["product"][] = $row;
	}
	while ($row = mysqli_fetch_array($GLOBALS['result2'])){ 
	    $data["comment"][] = $row;
	}
	echo json_encode($data);
?>