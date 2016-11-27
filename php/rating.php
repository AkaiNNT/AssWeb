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
	$pid = $_SESSION['productID'];
	$star = $_POST['star'];

	$result = mysqli_query($GLOBALS['dbhandle'],"SELECT * FROM rating WHERE UserID = $uid AND ProductID = $pid");
	if($result->num_rows == 0){
		mysqli_query($GLOBALS['dbhandle'],"INSERT INTO rating VALUES(NULL,$uid,$pid,$star)");
		$result2 = mysqli_query($GLOBALS['dbhandle'],"SELECT AVG(star) as S FROM rating WHERE ProductID = $pid");
		$row = mysqli_fetch_array($result2);
		$updateStar = $row{'S'};
		mysqli_query($GLOBALS['dbhandle'],"UPDATE product SET star =$updateStar,NumVote = NumVote+1 WHERE ID = $pid");
		echo 1;
	}
	else{
		mysqli_query($GLOBALS['dbhandle'],"UPDATE rating SET star =$star WHERE UserID = $uid AND ProductID = $pid");
		$result2 = mysqli_query($GLOBALS['dbhandle'],"SELECT AVG(star) as S FROM rating WHERE ProductID = $pid");
		$row = mysqli_fetch_array($result2);
		$updateStar = $row{'S'};
		mysqli_query($GLOBALS['dbhandle'],"UPDATE product SET star =$updateStar WHERE ID = $pid");
		echo 2;
	}
	
	mysqli_close($dbhandle);
?>