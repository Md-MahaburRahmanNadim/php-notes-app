<?php

class Database{
    
    public $connection;
    public function __construct($config,$username='laravel_user',$password='Secret123!'){
//    as the env or config data change according to the env thats why we left those data into upword or outer of this file  into config file; so that we can use different config file to different env
    $dns = 'mysql:'.  http_build_query($config,'',';');
    // http_build_query not perse the ($%^) nicly its only show the number instade of the char. thats why this method is not work here
    // dd($dns);

// AS WE give user name and pass thats why avobe http_build_query work

        // $dns = 'mysql:host=localhost;port=3306;user=laravel_user;dbname=laravel_db;charset=utf8mb4;password=Secret123!;';
$this->$connection = new PDO($dns,$username,$password,[
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
]);

    }
    public function query($query){

$statement = $this->$connection->prepare($query);
$statement->execute();
// $posts = $statement->fetchAll();
return $statement;
    }
    

}