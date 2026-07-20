<?php

namespace Core;

use PDO;

class Database
{

    public $connection;
    public $statement;
    public function __construct($config, $username = 'laravel_user', $password = 'Secret123!')
    {
        $dns = 'mysql:' .  http_build_query($config, '', ';');


        // $dns = 'mysql:host=localhost;port=3306;user=laravel_user;dbname=laravel_db;charset=utf8mb4;password=Secret123!;';
        $this->connection = new PDO($dns, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    public function query($query, $parms = [])
    {

// $statement = $this->connection->prepare($query);
// $statement->execute($parms);
// return $statement;

        /**
         * now we are going to return the instance of that object
         * 
         */
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($parms);
        return $this;
    }
    public function get()
    {
        return $this->statement->fetchAll();
    }
    public function find()
    {
        return $this->statement->fetch();
    }
    public function findOrFail()
    {
        $result = $this->find();
        if (!$result) {
            abort();
        }
        return $result;
    }
}
