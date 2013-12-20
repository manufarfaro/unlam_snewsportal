<?php

	chdir(dirname(__FILE__));
	include_once('../classes/service/NoticeService.class.php');
	echo('<h1>getAll</h1>');
	$objNotice = new NoticeService();
	echo("<pre>");
	$arr = $objNotice->getAll();
	print_r ($arr);
	echo("</pre>");
	echo('<h1>addNew</h1>');
	$notice = new Notice();
	$notice->setTitle('Frio en buenos Aires');
	$notice->setText('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');
	$notice->setCreatedDate('2012-10-02');
	
	$author = new UserService();
	$notice->setAuthor($author->getById(3));
	//$objNotice->addNew($notice);
	
	echo('<h1>deleteById</h1>');
	
	$objNotice->deleteById(6);
?>