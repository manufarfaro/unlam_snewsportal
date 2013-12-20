<?php
	chdir(dirname(__FILE__));
	
	include_once('../classes/model/ConnectionProvider.class.php');
	
		$connection = ConnectionProvider::getInstance();
		
		$statement = $connection->prepare('SELECT * FROM notice n LIMIT 0,1000');
		$statement->execute();
		
		
		print_r($statement->fetch())
	
?>