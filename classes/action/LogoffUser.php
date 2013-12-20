<?php
	session_start(); 
	unset($_SESSION['UserLogged']);	
	session_unset();
	session_destroy();
	header("location: ../../indexAdmin.php");
	
?>