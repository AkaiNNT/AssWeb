<?php
	session_start();
	$_SESSION['method'] = $_POST['method'];
	$_SESSION['x'] = $_POST['x'];
	$_SESSION['y'] = $_POST['y'];
	$_SESSION['z'] = $_POST['z'];
?>