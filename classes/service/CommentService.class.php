<?php

	chdir(dirname(__FILE__));
	
	require_once ('../model/ConnectionProvider.class.php');
	require_once ('Service.interface.php');
	require_once ('../model/Notice.class.php');
	require_once ('../model/Comment.class.php');

	class CommentService{
		
		public function getByAuthor($notice_id){
			$connection = ConnectionProvider::getInstance();
			$colComment = array();
			
			$statement = $connection->prepare("SELECT *  FROM comment WHERE notice_id = :notice_id AND isActive = '1';");
			$statement->bindParam(":notice_id",$notice_id,PDO::PARAM_INT);
			$statement->execute();
			
			foreach ($statement as $key => $value) {
				$comment = new Comment();
				$comment->setId($value['comment_id']);
				$comment->setAuthorName($value['name']);
				$comment->setAuthorText($value['text']);
				$comment->setCreatedDate($value['timestamp']);
				
				$colComment[] = $comment;
			}
			return($colComment);
			
		}
		
		public function addNew($comment){
			try{
				
				$connection = ConnectionProvider::getInstance();
							
				$statement = $connection->prepare("INSERT INTO comment (notice_id, name, text) VALUES (:notice_id, :name, :text);");
				$statement -> bindParam(":notice_id",$comment->getNoticeId(),PDO::PARAM_INT);
				$statement -> bindParam(":name",$comment->getAuthorName(),PDO::PARAM_STR);
				$statement -> bindParam(":text",$comment->getAuthorText(),PDO::PARAM_STR);

				$statement->execute();
				
			}catch(exception $error){
				/* Do Nothing. */
			}
			
		}
		
	}

?>