<?php

	chdir(dirname(__FILE__));
	
	require_once ('../service/NoticeService.class.php');
	require_once ('../service/UserService.class.php');
	
	try {
	
		$objNotice = new NoticeService();
		$author = new UserService();
	
		$notice = new Notice();
		$notice -> setAuthor($author->getById($_POST['ddlAuthorNotice']));
		$notice -> setTitle($_POST['txtTitleNotice']);
		$notice -> setText($_POST['txtTextNotice']);
		$notice -> setCreatedDate(date("Y-m-d"));
		$objNotice -> addNew($notice);
	
		header("location: ../../indexAdmin.php?action=viewNoticesList");
	
	} catch(exception $e) {
		header("location: ../../indexAdmin.php");
	}

?>