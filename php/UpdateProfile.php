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
	$pass = $_POST['password'];
	$email = $_POST['email'];
	$fullname = $_POST['fullname'];
	$address = $_POST['address'];

	mysqli_query($GLOBALS['dbhandle'],"UPDATE user SET Password = '$pass', Email = '$email', FullName = '$fullname', Address = '$address' WHERE ID =  $uid");

	$_SESSION['pass'] = $pass;

	mysqli_close($dbhandle);
?>