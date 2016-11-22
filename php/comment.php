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

	$pid = $_SESSION['productID'];
	$uid = $_SESSION['userId'];
	$content = $_POST['content'];
	
	mysqli_query($GLOBALS['dbhandle'],"INSERT INTO comment VALUES(NULL,$pid,$uid,\"$content\",NULL)");
	$result1 = mysqli_query($GLOBALS['dbhandle'],"SELECT comment.ID,user.Username,comment.content,comment.Time FROM comment,user WHERE user.ID=comment.UserID ORDER BY Time DESC LIMIT 1");
	
	$data = array();
	while ($row = mysqli_fetch_array($GLOBALS['result1'])){ 
	    $data[] = $row;
	}
	echo json_encode($data);
?>