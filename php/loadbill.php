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

	$result = mysqli_query($GLOBALS['dbhandle'],"SELECT payment.Price,payment.Num,product.Name,bill.PriceTotal FROM payment,product,bill WHERE payment.BillID = $bid  AND product.ID = payment.ProductID AND bill.ID = payment.BillID");
	
	$data = array();
	while ($row = mysqli_fetch_array($GLOBALS['result'])){ 
	    $data[] =  $row;
	}
	
	echo json_encode($data);
	mysqli_close($dbhandle);
?>