<?php
  ini_set('max_execution_time', 300); //300 seconds = 5 minutes
  class db{
    //properties
    private $dbhost = '';
    private $dbuser = '';
    private $dbpass = '';
    private $dbname = '';

    //connect
    public function connect(){
      $mysql_connect_str = "mysql:host=$this->dbhost; dbname=$this->dbname";
      $dbConnection = new PDO($mysql_connect_str, $this->dbuser, $this->dbpass);
      $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $dbConnection;
    }
  }
