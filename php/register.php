<?php
	$username = "root";
	$password = "";
	$hostname = "localhost"; 

	//connection to the database
	$dbhandle = mysqli_connect($hostname, $username, $password) or die("Unable to connect to MySQL");
	//select a database to work with
	$selected = mysqli_select_db($dbhandle, "shopbanhang") or die("Could not select shopbanhang");

	$user = $_POST['username'];
	$pass = $_POST['pass'];
	$email = $_POST['email'];
	
	$result1 = mysqli_query($GLOBALS['dbhandle'],"SELECT * FROM user WHERE Username='".$user."';");
	$num1 = $result1->num_rows;
	$kq = 3;
	if($num1==0){
		$result2 = mysqli_query($GLOBALS['dbhandle'],"SELECT * FROM user WHERE Email='".$email."';");
		$num2 = $result2->num_rows;
		if($num2==0){
			$kq = 1;
		}
		else{
			$kq = 2;
		}
	}
	if($kq == 1) mysqli_query($GLOBALS['dbhandle'],"INSERT INTO user VALUES(NULL,'".$user."','".$pass."','".$email."',NULL,NULL,NULL);");
	mysqli_close($dbhandle);
	echo $kq;
	
?>