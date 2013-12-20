<?php
	
	chdir(dirname(__FILE__));
	
	try{

		require_once ('../service/NoticeService.class.php');
	
		$noticeService = new NoticeService();
		$noticeService->deleteById($_REQUEST['notice_id']);
		header("location: ../../indexAdmin.php?action=viewNoticesList");
		
	}catch(exception $error){
		/* Do Nothing */
		header("location: ../../indexAdmin.php?action=viewNoticesList");
	}
	
	
	
	
?>
