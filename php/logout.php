<?php 
	session_start();
	unset($_SESSION['userId']);
	unset($_SESSION['username']);
	unset($_SESSION['pass']);
	session_destroy();
?>
