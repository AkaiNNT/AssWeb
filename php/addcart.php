<?php
	session_start();
	$username = "root";
	$password = "";
	$hostname = "localhost"; 

	//connection to the database
	$dbhandle = mysqli_connect($hostname, $username, $password) or die("Unable to connect to MySQL");
	//select a database to work with
	$selected = mysqli_select_db($dbhandle, "shopbanhang") or die("Could not select shopbanhang");
	if(isset($_SESSION['userId'])){
		$uid = $_SESSION['userId'];
		$pid = $_POST['productID'];
		$num = $_POST['num'];

		$result1 = mysqli_query($GLOBALS['dbhandle'],"SELECT * FROM cart WHERE ProductID = $pid AND UserID = $uid");
		
		if($result1->num_rows == 0){
			$result2 = mysqli_query($GLOBALS['dbhandle'],"INSERT INTO cart VALUES(NULL,$pid,$uid,$num)");
			echo 1;
		}
		else echo 0;
	}
	else echo 2;
	mysqli_close($dbhandle);
?>