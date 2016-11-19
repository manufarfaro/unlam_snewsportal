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

		public function __construct(){
            if (getenv("CLEARDB_DATABASE_URL")){
                $this->url = parse_url(getenv("CLEARDB_DATABASE_URL"));
                $this->host = $this->url["host"];
                $this->user = $this->url["user"];
                $this->password = $this->url["pass"];
                $this->dbName = substr($this->url["path"], 1);
            }
            $this->connectionString = "mysql:host={$this->host};dbname={$this->dbName};charset=utf8";
        }

        public function connect() {
            if (!isset($this->instance)){
                try {
                    $this->instance = new PDO($this->connectionString, $this->user, $this->password);
                    $this->instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
                    $this->instance->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");
                } catch (PDOException $e) {
                    echo "Connection Database Error: " . $e->getMessage();
                }
            }
            return $this->instance;
        }

		public function __clone(){}
	    public function __wakeup(){}
		
	}
	
?>