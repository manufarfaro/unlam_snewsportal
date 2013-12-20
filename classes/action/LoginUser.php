<?php

	chdir(dirname(__FILE__));

	require_once('../model/ConnectionProvider.class.php');
	require_once('../service/UserService.class.php');

	session_start();
	
	
	
	try{
		if( isset($_POST['username']) && isset($_POST['password']) ){	

			$userService = new UserService();
			$sqlLogin = ("SELECT person_id FROM person WHERE mail = '". $_POST['username'] ."' AND userpass = '". $_POST['password'] . "'");
			$connection = ConnectionProvider::getInstance();
			$statement = $connection->prepare($sqlLogin);
			$statement->execute();
			$arrUser = $statement->fetch();
			$user = $userService->getById($arrUser['person_id']);
			if(!empty($user)){
				$_SESSION['UserLogged'] = serialize($user);
				header("location: ../../indexAdmin.php");
			}else{
				header("location: ../../indexAdmin.php");
			}
			
		}
	}catch(exception $e){
		print_r($e->getMessage());
		header("location: ../../indexAdmin.php");
	}
	
?>