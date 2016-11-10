<?php
	session_start();
	$username = "root";
	$password = "";
	$hostname = "localhost"; 

	//connection to the database
	$dbhandle = mysqli_connect($hostname, $username, $password) or die("Unable to connect to MySQL");
	//select a database to work with
	$selected = mysqli_select_db($dbhandle, "shopbanhang") or die("Could not select examples");

	$user = $_POST['username'];
	$pass = $_POST['pass'];
	$valid = $_POST['valid'];
	
	$result1 = mysqli_query($GLOBALS['dbhandle'],"SELECT * FROM user WHERE Username='".$user."';");
	$num1 = $result1->num_rows;
	$kq = 2;
	if($num1==1){
		$row = mysqli_fetch_array($result1);
		if ($row{'Password'} == $pass) {
			$kq = 1;
			if($valid==true){
				$_SESSION['userId'] = $row{'ID'};
				$_SESSION['username'] = $row{'Username'};
				$_SESSION['pass'] = $row{'Password'};
			}
		}
	}

	mysqli_close($dbhandle);
	echo $kq;
?>