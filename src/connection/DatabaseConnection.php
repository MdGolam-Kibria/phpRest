<?php

namespace App\connection;
use Dotenv\Dotenv;

class DatabaseConnection
{
   public $connection;

    private static $pdo;

    public static function myDb(){
         if(!isset(self::$pdo)){
             try{
                 self::$pdo=new \PDO("mysql:host=localhost;dbname=salt", "root","Nahid940###***");
                 self::$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
             }
             catch(\PDOException $exp){
                 return $exp->getMessage();
             }
         }
         return self::$pdo;
     }

     public static function myQuery($sql){
         return self::myDb()->prepare($sql);
     }

 }
