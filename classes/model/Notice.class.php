<?php

class Notice {

	private $id;
	private $author;
	private $title;
	private $text;
	private $createdDate;
	private $isActive;
	private $comments;

	public function __construct() {

	}

	//Getters and Setters
	public function getId(){
		return($this->id);
	}
	public function setId($value){
		$this->id = $value;
	} 

	public function getAuthor(){
		return($this->author);
	}
	public function setAuthor($value){
		$this->author = $value;
	}
	
	public function getTitle(){
		return($this->title);
	}
	public function setTitle($value){
		$this->title = $value;
	}
	
	public function getText(){
		return($this->text);
	}
	public function setText($value){
		$this->text = $value;
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
	
	public function getComments(){
		return($this->comments);
	}
	public function setComments($value){
		$this->comments = $value;
	}
	
}

?>