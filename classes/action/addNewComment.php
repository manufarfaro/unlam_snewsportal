<?php
	
	chdir(dirname(__FILE__));
	
	require_once ('../service/CommentService.class.php');
	require_once ('../model/Comment.class.php');
	
	$commentService = new CommentService();
	
	if(isset($_POST['nameComment']) && isset($_POST['txtComment']) && isset($_POST['noticeId'])){
		$comment = new Comment();
		$comment->setNoticeId($_POST['noticeId']);
		$comment->setAuthorName($_POST['nameComment']);
		$comment->setAuthorText(htmlspecialchars($_POST['txtComment']));
		$commentService->addNew($comment);
	}

	header("location: ../../index.php");
?>