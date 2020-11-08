<?php

 class DatabaseConnection
{
   var $serverName;
   var $username ;
   var $password;
   var $dbname;
   public $connection;

     public function __construct($serverName, $username, $password, $dbname)
     {
         $this->serverName = $serverName;
         $this->username = $username;
         $this->password = $password;
         $this->dbname = $dbname;
         $this->connection = mysqli_connect($this->serverName,$this->username,$this->password,$this->dbname);
     }

     /**
      * @return string
      */
     public function getServerName()
     {
         return $this->serverName;
     }

     /**
      * @param string $serverName
      */
     public function setServerName($serverName)
     {
         $this->serverName = $serverName;
     }

     /**
      * @return string
      */
     public function getUsername()
     {
         return $this->username;
     }

     /**
      * @param string $username
      */
     public function setUsername($username)
     {
         $this->username = $username;
     }

     /**
      * @return string
      */
     public function getPassword()
     {
         return $this->password;
     }

     /**
      * @param string $password
      */
     public function setPassword($password)
     {
         $this->password = $password;
     }

     /**
      * @return string
      */
     public function getDbname()
     {
         return $this->dbname;
     }

     /**
      * @param string $dbname
      */
     public function setDbname($dbname)
     {
         $this->dbname = $dbname;
     }

     /**
      * @return false|mysqli
      */
     public function getConnection()
     {
         return $this->connection;
     }

     /**
      * @param false|mysqli $connection
      */
     public function setConnection($connection)
     {
         $this->connection = $connection;
     }

 }
