<?php

	chdir(dirname(__FILE__));
	
	require_once ('../model/ConnectionProvider.class.php');
	require_once ('Service.interface.php');
	require_once ('../model/Notice.class.php');
	require_once ('../model/Comment.class.php');
	require_once ('CommentService.class.php');
	require_once ('UserService.class.php');

	class NoticeService implements DaoService{
		
		public function getAll(){
			$connection = new ConnectionProvider();
			$colNotices = array();
			
			$statement = $connection->prepare("SELECT notice_id, person_id, title, text, dateCreated, isActive  FROM notice WHERE isActive = '1' ORDER BY timestamp DESC ;");
			$statement->execute();
			
			foreach ($statement as $key => $value) {
				$notice = new Notice();
				$notice->setId($value['notice_id']);
				$notice->setTitle($value['title']);
				$notice->setText($value['text']);
				$notice->setCreatedDate($value['dateCreated']);
				
				$author = new UserService();
				$notice->setAuthor($author->getById($value['person_id']));
				
				$comments = new CommentService();
				$notice->setComments($comments->getByAuthor($value['notice_id']));
				
				$colNotices[] = $notice;
			}
			
			return($colNotices);
			
		}


		public function getAllByAuthorId($person_id){
			$connection = new ConnectionProvider();
			$colNotices = array();
			
			$statement = $connection->prepare("SELECT notice_id, person_id, title, text, dateCreated, isActive  FROM notice WHERE person_id = :person_id AND isActive = '1' ORDER BY timestamp DESC ;");
			$statement -> bindParam(":person_id",$person_id,PDO::PARAM_INT);
			$statement->execute();
			
			foreach ($statement as $key => $value) {
				$notice = new Notice();
				$notice->setId($value['notice_id']);
				$notice->setTitle($value['title']);
				$notice->setText($value['text']);
				$notice->setCreatedDate($value['dateCreated']);
				
				$author = new UserService();
				$notice->setAuthor($author->getById($value['person_id']));
				
				$comments = new CommentService();
				$notice->setComments($comments->getByAuthor($value['notice_id']));
				
				$colNotices[] = $notice;
			}
			
			return($colNotices);
			
		}

		public function deleteById($notice_id){
			try{
				$connection = new ConnectionProvider();
								
				$statement = $connection->prepare("DELETE FROM notice WHERE notice_id = :notice_id AND isActive = '1';");
				$statement -> bindParam(":notice_id",$notice_id,PDO::PARAM_INT);
				$statement->execute();
			}catch(exception $error){
				/* Do Nothing. */
			}
			
		}
		public function addNew($notice){
			try{
				
				$connection = new ConnectionProvider();
							
				$statement = $connection->prepare("INSERT INTO notice (person_id, title, text, dateCreated) VALUES (:person_id, :title, :text, :dataCreated);");
				$statement -> bindParam(":person_id",$notice->getAuthor()->getId(),PDO::PARAM_INT);
				$statement -> bindParam(":title",$notice->getTitle(),PDO::PARAM_STR);
				$statement -> bindParam(":text",$notice->getText(),PDO::PARAM_STR);
				$statement -> bindParam(":dataCreated",$notice->getCreatedDate(),PDO::PARAM_STR);
				
				$statement->execute();
				
			}catch(Exception $e){
                echo "No se ha podido guardar: " . $e->getMessage();
			}
			
		}
	}

?>