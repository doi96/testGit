<?php
class Database{
    const DNS='mysql:host=localhost;dbname=test;';
    const DBUSER='root';
    const DBPASS='';
    public $db;
    function __constructor(){
       try {
         $this->db=new PDO(self::DNS,self::DBUSER,self::DBPASS,array(
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        ));
        $this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
       } catch (PDOException $e) {
          $error_message = $e->getMessage();
          //include 'database_error.php';
          exit();
       }
    }
}