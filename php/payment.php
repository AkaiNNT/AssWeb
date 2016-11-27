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

	$bid = $_POST['bid'];
	$uid = $_SESSION['userId'];
	$pid = $_POST['pid'];
	$num = $_POST['num'];
	$price = $_POST['price'];

	mysqli_query($GLOBALS['dbhandle'],"INSERT INTO payment VALUES(NULL,$bid,$pid,$num,$price)");
	mysqli_query($GLOBALS['dbhandle'],"UPDATE product SET NumBuy = NumBuy + $num WHERE ID = $pid");

	mysqli_close($dbhandle);
?>