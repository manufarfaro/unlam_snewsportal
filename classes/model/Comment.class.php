<?php

class Comment {

	private $id;
	private $noticeId;
	private $authorName;
	private $authorText;
	private $createdDate;
	private $isActive;

	function __construct() {

	}
	
	public function getId(){
		return($this->id);
	} 
	public function setId($value){
		$this->id = $value;
	}
	
	public function getNoticeId(){
		return($this->noticeId);
	} 
	public function setNoticeId($value){
		$this->noticeId = $value;
	}
	
	public function getAuthorName(){
		return($this->authorName);
	}
	public function setAuthorName($value){
		$this->authorName = $value;
	}
	
	public function getAuthorText(){
		return($this->authorText);
	}
	public function setAuthorText($value){
		$this->authorText = $value;
	}
	
	public function getCreatedDate(){
		return($this->createdDate);
	}
	public function setCreatedDate($value){
		$this->createdDate = $value;
	}
	
	public function getIsActive(){
		return($this->isActive);
	}
	public function setIsActive($value){
		$this->isActive = $value;
	}
}

?>