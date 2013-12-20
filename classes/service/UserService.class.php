<?php

	chdir(dirname(__FILE__));
	
	require_once ('../model/ConnectionProvider.class.php');
	require_once ('Service.interface.php');
	require_once ('../model/Notice.class.php');
	require_once ('../model/User.class.php');
	require_once ('../model/Comment.class.php');

	class UserService{
		
		public function __construct(){}
		
		public function getByRole($role_id){
			$connection = ConnectionProvider::getInstance();
			$colUser = array();
			
			$statement = $connection->prepare("SELECT * FROM person WHERE role_id = :role_id AND isActive = '1';");
			$statement -> bindParam(":role_id",$role_id,PDO::PARAM_INT);
			$statement->execute();
			$fetchStatement = clone($statement);
			if(count($fetchStatement->fetchAll()) > 0){				
				foreach ($statement as $key => $value) {
					$user = new User();
					$user->setId($value['person_id']);
					$user->setUserName($value['userpass']);
					$user->setName($value['name']);
					$user->setSurname($value['surname']);
					$user->setMail($value['mail']);
					$user->setRole($value['role_id']);
					$user->setisActive($value['isActive']);
					$colUser[] = $user;
				}
				return($colUser);
			}else{
				return(false);
			}
		}
		
		public function getAll(){
			
			$connection = ConnectionProvider::getInstance();
			
			$statement = $connection->prepare("SELECT * FROM person WHERE isActive = '1';");
			$statement->execute();
			$fetchStatement = clone($statement);
			if(count($fetchStatement->fetch()) > 0){
				
				foreach ($statement as $key => $value) {
					$user = new User();
					$user->setId($value['person_id']);
					$user->setUserName($value['userpass']);
					$user->setName($value['name']);
					$user->setSurname($value['surname']);
					$user->setMail($value['mail']);
					$user->setRole($value['role_id']);
					$user->setisActive($value['isActive']);
					$colUser[] = $user;
				}
					return($colUser);
				
			}else{
				return(false);
			}
			
		}
		
		public function getById($person_id){
			
			$connection = ConnectionProvider::getInstance();
			
			$statement = $connection->prepare("SELECT * FROM person WHERE person_id = :person_id AND isActive = '1';");
			$statement -> bindParam(":person_id",$person_id,PDO::PARAM_INT);
			$statement->execute();
			$fetchStatement = clone($statement);
			if(count($fetchStatement->fetch()) > 0){
				
				foreach ($statement as $key => $value) {
					$user = new User();
					$user->setId($value['person_id']);
					$user->setUserName($value['userpass']);
					$user->setName($value['name']);
					$user->setSurname($value['surname']);
					$user->setMail($value['mail']);
					$user->setRole($value['role_id']);
					$user->setisActive($value['isActive']);
				}
					return($user);
				
			}else{
				return(false);
			}
			
		}
		
		public function addNew( $person, $password = "none"){
			try{
				$connection = ConnectionProvider::getInstance();
				$statement = $connection->prepare("INSERT INTO person (mail, userpass, name, surname, role_id) VALUES (:mail, :password, :name, :surname, :role_id);");
				$statement -> bindParam(":mail",$person->getMail(),PDO::PARAM_STR);
				$statement -> bindParam(":password",$password,PDO::PARAM_STR);
				$statement -> bindParam(":name",$person->getName(),PDO::PARAM_STR);
				$statement -> bindParam(":surname",$person->getSurname(),PDO::PARAM_STR);
				$statement -> bindParam(":role_id",$person->getRole(),PDO::PARAM_INT);
				$statement->execute();
			}catch(exception $error){
				/* Do Nothing */
			}
			
		}
		
		public function deleteById($person_id){
			try{
				$connection = ConnectionProvider::getInstance();
				$statement = $connection->prepare("DELETE FROM person WHERE person_id = :person_id;");
				$statement -> bindParam(":person_id",$person_id,PDO::PARAM_INT);
				$statement->execute();
			}catch(exception $error){
				/* Do Nothing */
			}
			
		}
		
		public function editById($objPerson, $pass_string = null){
			try{
				$connection = ConnectionProvider::getInstance();
				if($pass_string != null){
					$statement = $connection->prepare("UPDATE person SET name = :name , surname = :surname , userpass = :password  WHERE person_id = :person_id;");
					$statement -> bindParam(":name",$objPerson->getName(),PDO::PARAM_STR);
					$statement -> bindParam(":surname",$person_id->getSurname(),PDO::PARAM_STR);
					$statement -> bindParam(":password",$pass_string->get,PDO::PARAM_STR);
					$statement -> bindParam(":person_id",$person_id->getId(),PDO::PARAM_INT);
				}else{
					$statement = $connection->prepare("UPDATE person SET name = :name , surname = :surname WHERE person_id = :person_id;");
					$statement -> bindParam(":name",$objPerson->getName(),PDO::PARAM_STR);
					$statement -> bindParam(":surname",$person_id->getSurname(),PDO::PARAM_STR);
					$statement -> bindParam(":person_id",$person_id->getId(),PDO::PARAM_INT);
				}
				
				
				$statement->execute();
				return(true);
			}catch(exception $error){
				/* Do Nothing */
				return (false);
			}
		}
		
//		public function 
		
	}

?>