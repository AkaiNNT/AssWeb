<?php 
	$host = 'localhost';
	$database = 'shopbanhang';
	$username = "root";
	$password = "";
	$hostname = "127.0.0.1"; 
	$conn = new PDO('mysql:host=' . $hostname . ';dbname=' . $database, $username, $password);
	$conn ->exec("set names utf8");
?>