<?php
	
	chdir(dirname(__FILE__));
	
	try{

		require_once ('../service/UserService.class.php');
	
		$userService = new UserService();
		$userService->deleteById($_REQUEST['user_id']);
		header("location: ../../indexAdmin.php?action=viewJournalistsList");
		
	}catch(exception $error){
		/* Do Nothing */
		header("location: ../../indexAdmin.php?action=viewJournalistsList");
	}
	
	
	
	
?>
