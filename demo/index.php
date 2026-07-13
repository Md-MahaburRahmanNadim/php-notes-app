<?php
include_once 'functions.php';
// include_once 'router.php';

// code refactoring
// connect to a db and execute a query
class Database{
    public function __constract(){

    }
    public function query(){
$dns = 'mysql:host=localhost;port=3306;user=laravel_user;dbname=laravel_db;charset=utf8mb4;password=Secret123!;';
$pdo = new PDO($dns);
$statement = $pdo->prepare('select * from posts');
$statement->execute();
// $posts = $statement->fetchAll();
return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    

}
$db= new Database();
$posts = $db->query();



// dd($posts);
foreach ($posts as $post) :?>



<ul>
    <li><?=$post['title']?></li>
</ul>

<?php endforeach?>
