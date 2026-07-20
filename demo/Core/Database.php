<?php

namespace Core;

use PDO;

// new PDO meaning use current namespace => Core\PDO 
// new \PDO meaning use global namespace 
// use PDO meaning use global namespace (use PDO) => translate into use \PDO

/**
 * new \PDO meaning look for global root 
 * new PDO meaning look for the current namespace
 */

/**
 * Why is a Namespace?

A namespace is like a folder of your PHP code. It keeps classes, functions and it’s constants organized and avoid conflicts.

 *  Your computer allows files with the same name as long as they’re in different folders.

 * Similarly, PHP allows two classes with same name as long as they’re in different namespaces.
 * 
 * In PHP, usually, namespace should match the folder structure the file is placed in.
 * https://medium.com/@bluznierca1/understanding-php-namespaces-organising-your-code-ba2590c5e529
 * 
 */
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
