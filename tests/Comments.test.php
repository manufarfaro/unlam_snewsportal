<?php

	chdir(dirname(__FILE__));

	include_once('../classes/service/NoticeService.class.php');
	
	$objComment = new CommentService();
	echo("<pre>");
	$arr = $objComment->getByAuthor(1);
	var_dump($arr);
	echo("</pre>");
	
?>