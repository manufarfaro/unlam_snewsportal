<?php

	chdir(dirname(__FILE__));

	include_once('../classes/service/UserService.class.php');
	
	$objUser = new UserService();
	echo("<h1>getById</h1>");
	echo("<pre>");
	$arr = $objUser->getById(2);
	var_dump($arr);
	echo("</pre>");
	
	echo("<h1>getByRole</h1>");
	echo("<pre>");
	//$arr = $objUser->getByRole(3);
	var_dump($arr);
	echo("</pre>");
	
	echo("<h1>addNew</h1>");
	$person = new User();
	$person->setMail("dummy@mail.com");
	$person->setName("dummy");
	$person->setSurname("testSurname");
	$person->setRole(3);
	$objUser->addNew($person, "123456");
?>