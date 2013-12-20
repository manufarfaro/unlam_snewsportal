<?php

	chdir(dirname(__FILE__));
	

	require_once('../../includes/global/standart.php');

	final class ConnectionProvider{
		private static $instance;
		
		private function __construct(){}

		//Metodo necesario para obtener la instancia del Singleton.
		public static function getInstance(){
			//if (!self::$instancia instanceof self){
			  if (!isset(self::$instance)){
		         $instancia = new PDO(DB_CONNECTIONSTRING, DB_USERNAME, DB_PASSWORD);
				 $instancia->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
		    }
		    return ($instancia);
		}
		
		//Metodos magicos necesarios para evitar el uso incorrecto de la clase.
		public function __clone(){}
	    public function __wakeup(){}
		
	}
	
?>