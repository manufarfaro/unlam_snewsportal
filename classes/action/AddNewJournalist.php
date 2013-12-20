<?php

	chdir(dirname(__FILE__));


	require_once('../service/UserService.class.php');

	
	try{
		
			$objUser = new UserService();
			
			$person = new User();
			$person->setMail($_POST['mail']);
			$person->setName($_POST['name']);
			$person->setSurname($_POST['surname']);
			$person->setRole(3);
			$objUser->addNew($person, $_POST['pwd']);
			
			header("location: ../../indexAdmin.php?action=viewJournalistsList");
		
	}catch(exception $e){
		header("location: ../../indexAdmin.php");
	}
	
	
	
	
	
	
	
	
	
?>