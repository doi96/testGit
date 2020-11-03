<?php
class Database{
    const DNS='mysql:host=localhost;dbname=test;';
    const DBUSER='root';
    const DBPASS='';
    public $db;
    function __constructor(){
       try {
         $this->db=new PDO(self::DNS,self::DBUSER);
       } catch (\PDOExeption $th) {
           //throw $th;
       }
    }
}