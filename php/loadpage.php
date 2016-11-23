<?php
	$username = "root";
	$password = "";
	$hostname = "localhost"; 

	//connection to the database
	$dbhandle = mysqli_connect($hostname, $username, $password) or die("Unable to connect to MySQL");
	//select a database to work with
	$selected = mysqli_select_db($dbhandle, "shopbanhang") or die("Could not select shopbanhang");
	mysqli_query($GLOBALS['dbhandle'],'set names utf8');

	//loa
	$result11 = mysqli_query($GLOBALS['dbhandle'],"SELECT ID,Name,Price,Class,PostDay FROM product WHERE Type='loa'");
	$result12 = mysqli_query($GLOBALS['dbhandle'],"SELECT ID,Name,Price,Class,PostDay FROM product WHERE Type='loa' ORDER BY Price ASC");
	$result13 = mysqli_query($GLOBALS['dbhandle'],"SELECT ID,Name,Price,Class,PostDay FROM product WHERE Type='loa' ORDER BY Price DESC");

	//mp3
	$result21 = mysqli_query($GLOBALS['dbhandle'],"SELECT ID,Name,Price,Class,PostDay FROM product WHERE Type='mp3'");
	$result22 = mysqli_query($GLOBALS['dbhandle'],"SELECT ID,Name,Price,Class,PostDay FROM product WHERE Type='mp3' ORDER BY Price ASC");
	$result23 = mysqli_query($GLOBALS['dbhandle'],"SELECT ID,Name,Price,Class,PostDay FROM product WHERE Type='mp3' ORDER BY Price DESC");

	$data = array();
	//loa data
	while ($row = mysqli_fetch_array($GLOBALS['result11'])){ 
	    $data["loa"][0][] =  $row;
	}
	while ($row = mysqli_fetch_array($GLOBALS['result12'])){ 
	    $data["loa"][1][] =  $row;
	}
	while ($row = mysqli_fetch_array($GLOBALS['result13'])){ 
	    $data["loa"][2][] =  $row;
	}
	// mp3 data
	while ($row = mysqli_fetch_array($GLOBALS['result21'])){ 
	    $data["mp3"][0][] =  $row;
	}
	while ($row = mysqli_fetch_array($GLOBALS['result22'])){ 
	    $data["mp3"][1][] =  $row;
	}
	while ($row = mysqli_fetch_array($GLOBALS['result23'])){ 
	    $data["mp3"][2][] =  $row;
	}
	echo json_encode($data);
?>