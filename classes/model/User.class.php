<?php

class User {

	private $id;
	private $username;
	private $name;
	private $surname;
	private $mail;
	private $role;
	private $isActive;

	public function __construct(){}

	public function getId(){
		return($this->id);
	}
	public function getUserName(){
		return($this->username);
	}
	public function getName(){
		return($this->name);
	}
	public function getSurname(){
		return($this->surname);
	}
	public function getMail(){
		return($this->mail);
	}
	public function getRole(){
		return($this->role);
	}
	
	public function getIsActive(){
		return($this->isActive);
	}
	
	public function setId($value){
		$this->id = $value;
	}
	public function setUserName($value){
		$this->username = $value;
	}
	public function setName($value){
		$this->name = $value;
	}
	public function setSurname($value){
		$this->surname = $value;
	}
	public function setMail($value){
		$this->mail = $value;
	}
	public function setRole($value){
		$this->role = $value;
	}
	public function setisActive($value){
		$this->isActive = $value;
	}
}
?>