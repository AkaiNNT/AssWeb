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

	$method = $_SESSION['method'];
	$x = $_SESSION['x'];
	$y = $_SESSION['y'];
	$z = $_SESSION['z'];

	//$result = mysqli_query($GLOBALS['dbhandle'],"SELECT ID,Name,Price,Type,Class,PostDay FROM product WHERE 1");
	if($method == '1'){ // Theo từ khóa
		$GLOBALS['result'] = mysqli_query($GLOBALS['dbhandle'],"SELECT ID,Name,Price,Type,Class,PostDay FROM product WHERE Name LIKE '%".$x."%'");
	}
	elseif ($method == '2') { // theo giá
		$GLOBALS['result'] = mysqli_query($GLOBALS['dbhandle'],"SELECT ID,Name,Price,Type,Class,PostDay FROM product WHERE Price >= $x AND Price <= $y");
	}
	elseif ($method == '3') { // theo hãng sản xuất
		$GLOBALS['result'] = mysqli_query($GLOBALS['dbhandle'],"SELECT ID,Name,Price,Type,Class,PostDay FROM product WHERE Type = $z AND Class = $x");
	}
	else{ // rating

	}
	

	$data = array();
	if($result->num_rows >0){
		while ($row = mysqli_fetch_array($GLOBALS['result'])){ 
		    $data[] = $row;
		}
	}
	echo json_encode($data);
?>