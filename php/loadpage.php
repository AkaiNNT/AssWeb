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
	$result11 = mysqli_query($GLOBALS['dbhandle'],"SELECT ID,Name,Price,Class,PostDay,star FROM product WHERE Type='loa'");
	$result12 = mysqli_query($GLOBALS['dbhandle'],"SELECT ID,Name,Price,Class,PostDay,star FROM product WHERE Type='loa' ORDER BY Price ASC");
	$result13 = mysqli_query($GLOBALS['dbhandle'],"SELECT ID,Name,Price,Class,PostDay,star FROM product WHERE Type='loa' ORDER BY Price DESC");
	$result14 = mysqli_query($GLOBALS['dbhandle'],"SELECT ID,Name,Price,Class,PostDay,star FROM product WHERE Type='loa' ORDER BY star ASC");
	$result15 = mysqli_query($GLOBALS['dbhandle'],"SELECT ID,Name,Price,Class,PostDay,star FROM product WHERE Type='loa' ORDER BY star DESC");
	$result16 = mysqli_query($GLOBALS['dbhandle'],"SELECT ID,Name,Price,Class,PostDay,star FROM product WHERE Type='loa' ORDER BY NumBuy ASC");
	$result17 = mysqli_query($GLOBALS['dbhandle'],"SELECT ID,Name,Price,Class,PostDay,star FROM product WHERE Type='loa' ORDER BY NumBuy DESC");

	//mp3
	$result21 = mysqli_query($GLOBALS['dbhandle'],"SELECT ID,Name,Price,Class,PostDay,star FROM product WHERE Type='mp3'");
	$result22 = mysqli_query($GLOBALS['dbhandle'],"SELECT ID,Name,Price,Class,PostDay,star FROM product WHERE Type='mp3' ORDER BY Price ASC");
	$result23 = mysqli_query($GLOBALS['dbhandle'],"SELECT ID,Name,Price,Class,PostDay,star FROM product WHERE Type='mp3' ORDER BY Price DESC");
	$result24 = mysqli_query($GLOBALS['dbhandle'],"SELECT ID,Name,Price,Class,PostDay,star FROM product WHERE Type='mp3' ORDER BY star ASC");
	$result25 = mysqli_query($GLOBALS['dbhandle'],"SELECT ID,Name,Price,Class,PostDay,star FROM product WHERE Type='mp3' ORDER BY star DESC");
	$result26 = mysqli_query($GLOBALS['dbhandle'],"SELECT ID,Name,Price,Class,PostDay,star FROM product WHERE Type='mp3' ORDER BY NumBuy ASC");
	$result27 = mysqli_query($GLOBALS['dbhandle'],"SELECT ID,Name,Price,Class,PostDay,star FROM product WHERE Type='mp3' ORDER BY NumBuy DESC");
	
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
	while ($row = mysqli_fetch_array($GLOBALS['result14'])){ 
	    $data["loa"][3][] =  $row;
	}
	while ($row = mysqli_fetch_array($GLOBALS['result15'])){ 
	    $data["loa"][4][] =  $row;
	}
	while ($row = mysqli_fetch_array($GLOBALS['result16'])){ 
	    $data["loa"][5][] =  $row;
	}
	while ($row = mysqli_fetch_array($GLOBALS['result17'])){ 
	    $data["loa"][6][] =  $row;
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
	while ($row = mysqli_fetch_array($GLOBALS['result24'])){ 
	    $data["mp3"][3][] =  $row;
	}
	while ($row = mysqli_fetch_array($GLOBALS['result25'])){ 
	    $data["mp3"][4][] =  $row;
	}
	while ($row = mysqli_fetch_array($GLOBALS['result26'])){ 
	    $data["mp3"][5][] =  $row;
	}
	while ($row = mysqli_fetch_array($GLOBALS['result27'])){ 
	    $data["mp3"][6][] =  $row;
	}
	echo json_encode($data);
	mysqli_close($dbhandle);
?>