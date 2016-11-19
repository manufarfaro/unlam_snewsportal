<?php

	chdir(dirname(__FILE__));
	
	final class ConnectionProvider{
		private static $instance;

        private $url;
        private $connectionString;
        private $host = 'localhost';
        private $user = 'user';
        private $password = 'dev';
        private $dbName = 'snewsportal';

		private function __construct(){
            if (getenv("CLEARDB_DATABASE_URL")){
                $this->url = parse_url(getenv("CLEARDB_DATABASE_URL"));
                $this->host = $this->url["host"];
                $this->user = $this->url["user"];
                $this->password = $this->url["password"];
                $this->dbName = substr($this->url["path"], 1);
            }
            $this->connectionString = "mysql:host={$this->host};dbname={$this->dbName}";
        }

		public function getInstance(){
			  if (!isset(self::$instance)){
                  try {
                      $connectionString = "".;
                      $instance = new PDO($this->connectionString, $this->user, $this->password);
                      $instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
                  } catch (PDOException $e) {
                      echo "Connection Database Error: " . $e->getMessage();
                  }
		    }
		    return $instance;
		}
		
		//Metodos magicos necesarios para evitar el uso incorrecto de la clase.
		public function __clone(){}
	    public function __wakeup(){}
		
	}
	
?>