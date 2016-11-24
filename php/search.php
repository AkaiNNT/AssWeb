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

	$x = $_SESSION['x'];
	

	//$result = mysqli_query($GLOBALS['dbhandle'],"SELECT ID,Name,Price,Type,Class,PostDay FROM product WHERE 1");
	
	$result1 = mysqli_query($GLOBALS['dbhandle'],"SELECT ID,Name,Price,Type,Class,PostDay,star FROM product WHERE Name LIKE '%".$x."%'"); 
	$result2 = mysqli_query($GLOBALS['dbhandle'],"SELECT ID,Name,Price,Type,Class,PostDay,star FROM product WHERE Name LIKE '%".$x."%' ORDER BY Price ASC");
	$result3 = mysqli_query($GLOBALS['dbhandle'],"SELECT ID,Name,Price,Type,Class,PostDay,star FROM product WHERE Name LIKE '%".$x."%' ORDER BY Price DESC");
	$result4 = mysqli_query($GLOBALS['dbhandle'],"SELECT ID,Name,Price,Type,Class,PostDay,star FROM product WHERE Name LIKE '%".$x."%' ORDER BY star ASC");
	$result5 = mysqli_query($GLOBALS['dbhandle'],"SELECT ID,Name,Price,Type,Class,PostDay,star FROM product WHERE Name LIKE '%".$x."%' ORDER BY star DESC");
	

	$data = array();
	if($result1->num_rows >0){
		while ($row = mysqli_fetch_array($GLOBALS['result1'])){ 
		    $data[0][] = $row;
		}
	}
	if($result2->num_rows >0){
		while ($row = mysqli_fetch_array($GLOBALS['result2'])){ 
		    $data[1][] = $row;
		}
	}
	if($result3->num_rows >0){
		while ($row = mysqli_fetch_array($GLOBALS['result3'])){ 
		    $data[2][] = $row;
		}
	}
	if($result4->num_rows >0){
		while ($row = mysqli_fetch_array($GLOBALS['result4'])){ 
		    $data[3][] = $row;
		}
	}
	if($result5->num_rows >0){
		while ($row = mysqli_fetch_array($GLOBALS['result5'])){ 
		    $data[4][] = $row;
		}
	}
	echo json_encode($data);
?>