<?php

class Database{
    
    public $connection;
    public function __construct(){
        $dns = 'mysql:host=localhost;port=3306;user=laravel_user;dbname=laravel_db;charset=utf8mb4;password=Secret123!;';
$this->$connection = new PDO($dns);

    }
    public function query($query){

$statement = $this->$connection->prepare($query);
$statement->execute();
// $posts = $statement->fetchAll();
return $statement;
    }
    

}